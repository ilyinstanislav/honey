var peopleForm = {
    init: function () {
        $('#people_form').on('beforeSubmit', function (event, jqXHR, settings) {
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: form.serialize()
            })
                .done(function (data) {
                    $.pjax.reload({
                        container: '#form_box',
                        timeout: 10000, async:false
                    });
                    $.pjax.reload({
                        container: '#comments_box',
                        timeout: 10000, async:false
                    });
                })
                .fail(function () {
                    alert('Что-то пошло не так, попробуйте позже.');
                });
            return false;
        });
    }

};
