'use strict';
var Generator = require('yeoman-generator');
var chalk = require('chalk');
var yosay = require('yosay');
var fs = require('fs');
var spawn = require('child_process').spawn;

module.exports = Generator.extend({
  prompting: function () {
    // Have Yeoman greet the user.
    this.log(yosay(
      'Welcome to the Bono Metronic generator!'
    ));

    var prompts = [{
      type: 'input',
      name: 'projectname',
      message: 'Project Name ?',
      default: true
    }];

    return this.prompt(prompts).then(function (props) {
      // To access props later use this.props.someAnswer;

      this.props = props;
    }.bind(this));
  },

  writing: function () {
    var dir = './' + this.props.projectname;
    console.log(dir);
    if (!fs.existsSync(dir)) {
      fs.mkdirSync(dir);
    }

    this.fs.copy(
      this.templatePath('**/*'),
      this.destinationPath(dir)
    );
  },

  install: function () {
    var dir = './' + this.props.projectname;

    this.log('Converting hidden File');

    // Rename hidden extensision file to .namefile
    var listfile = fs.readdirSync(dir);
    for (var i = 0; i < listfile.length; i++) {
      if (listfile[i].match(/.*\.hidden/)) {
        fs.renameSync(dir + '/' + listfile[i], dir + '/.' + listfile[i].replace('.hidden', ''));
      }
    }

    this.log('Composer Install');

    process.chdir(dir);

    const ls = spawn('composer', ['install']);

    ls.stdout.on('data', data => {
      console.log(`stdout: ${data}`);
    });

    ls.stderr.on('data', data => {
      console.log(`${data}`);
    });

    ls.on('close', code => {
      console.log(`child process exited with code ${code}`);
    });
  }
});
