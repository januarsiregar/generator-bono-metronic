var url = {
    getquery: function(name, url) {
        url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

}

$(function() {
    //simple search -- page search
    $("form#formsearch input#searchbar").keypress(function(evt) {
        if (evt.keyCode == 13) {
            evt.preventDefault();

            var findValue = $(this).val();
            var Url = window.location.href.replace(/\?.*/g, "");
            if (findValue.length == 0) {
                return;
            } else {
                var finderUrl = Url + '?!search=' + findValue;
            }
            window.location = finderUrl;
        }
    });

    $("form#formsearch input#searchbar").val(url.getquery('!search'));

    // end simple search

    // themes convert 
    $(function() {
        $('#createform input[type=text],#updateform input[type=text],#readform input[type=text]').addClass('form-control');
        $('#createform input[type=password],#updateform input[type=password]').addClass('form-control col-md-6');
        $('#createform input[type=password],#updateform input[type=password]').removeClass('span-6');

        $('#createform textarea,#updateform textarea, #readform textarea').addClass('form-control');
        $('#createform select,#updateform select').addClass('form-control');
        $('#createform input[type=text],#updateform input[type=text]').attr('placeholder', '');
        $('#readform span.field').addClass('form-control');
        $('#createform .form-group label,#updateform .form-group label').addClass('control-label');
    });
    // themes convert 




    // $('th type=[type=checkbox]').('checked')
    $('.group-checkable').click(function(event) {
        if (this.checked) {
            // Iterate each checkbox
            $('.checkboxes').each(function() {
                this.checked = true;
            });
        } else {
            $('.checkboxes').each(function() {
                this.checked = false;
            });
        }
    });

    // popup delete
    $(function() {
        $("a.delete-popup").popup();
    });

    $(function() {
        $('data-repeater-item:first-child').find('.button-delete').hide();
        $('data-repeater-item').find('.button-add').hide();

    });




    //multiple delete on search
    $('a.btn-multi-delete').click(function(e) {
        e.preventDefault();
        var $delete = [];
        $('input.search-checkbox').each(function(e) {
            if ($(this).is(':checked')) {
                $delete.push($(this).val());
            }
        });
        console.log($delete);
        if ($delete.length > 0) {
            console.log('masuk');
            $(this).popup({ url: $(this).attr('href').toString().replace(':mutliid', $delete.join()), eventtarget: e });
        }

    });

    //search advance
    $('#btn-advance').on('click', function() {
        $('.advance').animate({ height: 'toggle' }, 'fast');
    });
    $('.advance .btn-cancel').on('click', function() {
        $('.advance').hide();
    });
});