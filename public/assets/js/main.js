(function ($) {

    $('#quote_form').on('submit', function (e) {

        e.preventDefault();
        let url = $(this).attr('action');
        let values = $(this).serialize();
        let result = setAjaxCall(url, 'POST', values);


        return;

    });

    function setAjaxCall(url, type, data) {
        $.ajax({
            beforeSend: function () {
                console.log('Enviado data');
            },
            type: type,
            url: url,
            data: data,
            success: function (data) {
                var result = $.parseJSON(data);

                if (result.type == 'ok') {
                    $('.form-result span.name').html(result.data.name);
                    $('.form-result span.phone').html(result.data.phone);
                    $('.form-result span.mail').html(result.data.mail);
                    $('.form-result span.version').html(result.data.version_id);
                    $('.form-result').removeClass('d-none');
                    $('.col.form').remove();

                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log('Todo mal');

            }
        });
    }
}(jQuery));
