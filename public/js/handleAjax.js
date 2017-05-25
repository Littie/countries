$(function () {
    console.log('hello');

    $('#countries').change(function () {
        var selected = $("#countries option:selected");

        $.ajax({
            url: '/check/cities/' + selected.val(),
            type: 'GET',
            success: function success(response) {
                $('#cities').remove();
                $('label[for="cities"]').remove();

                let form = $('#check_cities');
                let label = $('<label/>').attr({for: 'cities'}).addClass('control-label').html('Select city:')
                let selectList = $('<select/>').attr({name: 'cities', id: 'cities'}).addClass('form-control');

                $.each(response, function (item, element) {
                    selectList.append($('<option/>').attr('value', element.id).html(element.name));
                });

                if (response.length === 0) {
                    selectList = $('<h3/>').html('Countries not found');
                }

                form.append(label);
                form.append(selectList);
            },
            error: function error(response) {
                console.log(response);
            }
        })
    });

    // $('#cities').change(function () {
    $('#check_cities').on('change', '#cities', function () {
        var selected = $("#cities option:selected");

        $.ajax({
            url: '/check/languages/' + selected.val(),
            type: 'GET',
            success: function success(response) {
                console.log(response);
                // $('#cities').remove();
                //
                // let form = $('#check_cities');
                // let label = $('<label/>').attr({id: 'cities'}).addClass('control-label').html('Select city:')
                // let selectList = $('<select/>').attr({name: 'cities', id: 'cities'}).addClass('form-control');
                //
                // $.each(response, function (item, element) {
                //     selectList.append($('<option/>').attr('value', element.id).html(element.name));
                // });
                //
                // if (response.length === 0) {
                //     selectList = $('<h3/>').html('Countries not found');
                // }
                //
                // form.append(label);
                // form.append(selectList);
            },
            error: function error(response) {
                console.log(response);
            }
        })
    });
});
