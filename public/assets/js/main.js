(function ($) {

    $('#quote_form').on('submit', function (e) {

        e.preventDefault();
        console.log('weqwq');
        let values = $(this).serialize();
        setAjaxCall('url', 'POST', values);

        console.log(values);

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
            success: function () {
                console.log('Todo bien');

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log('Todo mal');

            }
        });
    }
}(jQuery));
