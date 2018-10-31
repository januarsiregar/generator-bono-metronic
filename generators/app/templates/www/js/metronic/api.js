var API = {
    response : {},
    getJson : function(options){
        var default_options = {
            header:{
              'content-type' :'application/json',
            }
        }
      return new Promise(function(resolve,reject){
          default_options = Object.assign(default_options,options);
          this.hit_api(options).then(function(response){

          }).catch(function(error){

          });
      });

    },
    hit_api: function(options = {}) {

        //uri, parameter = {}, type = 'POST', header = {}, base_url = true
        var default_options = {
           host: window.site_url,
           type: 'GET',
        }
        default_options = Object.assign(default_options,options);

        return new Promise(function(resolve, reject) {

          try{
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(e) {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        resolve(xhr.response)
                    } else {
                        reject(xhr.response);
                    }
                }
            }

            request.onerror = function(e) {
              reject(e);
            };

            default_options.uri = default_options.path;

            if (base_url) {
                default_options.uri = default_options.host + default_options.path;
            }

            var data = [];

            for (const key in default_options.data ) {
                data.push(key + '=' + encodeURI(parameter[key]));
            }

            data = data.join('&');

            if (type == 'GET') {
                uri += '?' + data;
            }

            request.open(default_options.type, default_options.uri);

            if (type == 'POST') {
                request.send(data);
            } else {
                request.send();
            }

          }catch(e){
            reject(e);
          }


        });

    },

    mergedHeader: function(){

    },
    serializeObject: function(temppost) {

        var post = {};
        // change serizlizearray to object
        for (var i = 0; i < temppost.length; i++) {
            if (temppost[i].value !== '') {
                post[temppost[i].name] = temppost[i].value;
            }
        }
        return post;

    },


}
