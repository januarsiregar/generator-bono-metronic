var FileUpload = function() {

    return {
        //main function to initiate the module
        init: function(obj = null) {
            var element = $('fileupload');

            if (obj) {
                element = $(obj).find('fileupload');
            }

            element.each(function(e) {
                var obj = $(this);
                var value = obj.find("input[type='hidden']").val();

                if (value != '') {
                    var img = document.createElement('img');
                    value = JSON.parse(value);
                    obj.find('.fileupload-filename').html(value.name);
                    if (obj.hasClass('fileupload-new')) {
                        obj.removeClass('fileupload-new');
                        obj.addClass('fileupload-exists');
                    }
                }

                obj.find("input[type='file']").change(function(e) {
                    var input = $(this).get(0).files;
                    var uri = 'index.php/metronic/upload_file.json';

                    if (obj.data('bucket') != '') {
                        uri += '?bucket=' + obj.data('bucket');
                    }

                    FileUpload.upload(input, obj.data('url') + uri, function(data, error) {
                        if (error) {
                            return;
                        }

                        if (obj.hasClass('fileupload-new')) {
                            obj.removeClass('fileupload-new');
                            obj.addClass('fileupload-exists');
                        }

                        if (data.length > 0) {
                            obj.find('input[type="hidden"]').val(JSON.stringify(data[0]));
                            var curobj = data[0];

                            obj.find('.fileupload-filename').html(curobj.name);
                        }

                    });

                });

                obj.find('a.fileupload-exists').click(function(e) {
                    if (obj.find('.fileupload-filename').length > 0) {
                        obj.find('.fileupload-filename').html('');
                    }

                    if (obj.hasClass('fileupload-exists')) {
                        obj.removeClass('fileupload-exists');
                        obj.addClass('fileupload-new');
                    }


                });

            });


            $('filereadonly').each(function(e) {
                var obj = this;
                if ($(this).find('input[type="hidden"]').val() == '') {
                    console.log($(this).find('button.btn-download'));
                    $(this).find('button.btn-download').attr('disabled', true);
                    return;
                }
                $(this).find('button.btn-download').click(function(e) {
                    var data = JSON.parse($(obj).find('input[type="hidden"]').val());
                    var url = $(obj).data('url') + data.bucket + '/' + data.filename;
                    window.open(url, '_blank');

                });



            });
        },
        processFile: function(files) {
            Thumbnail.processFile(files);

        },


        upload: function(file, url, cb = null) {
            Thumbnail.upload(file, url, cb);
        },

    };

}();

jQuery(document).ready(function() {
    FileUpload.init();
});