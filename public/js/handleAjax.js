$(function () {
    console.log('hello');

    $('#countries').change(function () {
        var selected = $("select option:selected");

        $.ajax({
            url: '/check/' + selected.val(),
            type: 'GET',
            success: function success(response) {
                $('#cities').remove();

                let form = $('#check_cities');
                let label = $('<label/>').attr({id: 'cities'}).addClass('control-label').html('Select city:')
                let selectList = $('<select/>').attr({name: 'cities', id: 'cities'}).addClass('form-control');

                $.each(response, function (item, element) {
                    selectList.append($('<option/>').attr('value', element.id).html(element.name));
                });

                form.append(label);
                form.append(selectList);
            },
            error: function error(response) {
                console.log(response);
            }
        })
    });
});
