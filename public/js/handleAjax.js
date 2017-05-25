$(function () {
    console.log('hello');

    $('#countries').change(function () {
        let selected = $("#countries").find("option:selected");

        $.ajax({
            url: '/check/cities/' + selected.val(),
            type: 'GET',
            success: function success(response) {
                console.log(response);
                addCitiesSelect(response);
                addLanguageTable(response);
            },
            error: function error(response) {
                console.log(response);
            }
        })
    });

    // $('#cities').change(function () {
    $('#check_cities').on('change', '#cities', function () {
        let selected = $("#cities").find("option:selected");

        $.ajax({
            url: '/check/languages/' + selected.val(),
            type: 'GET',
            success: function success(response) {
                addLanguageTable(response);
            },
            error: function error(response) {
                console.log(response);
            }
        })
    });

    function addCitiesSelect(response) {
        $('#cities').remove();
        $('label[for="cities"]').remove();

        let form = $('#check_cities');
        let label = $('<label/>').attr({for: 'cities'}).addClass('control-label').html('Select city:');
        let selectList = $('<select/>').attr({name: 'cities', id: 'cities'}).addClass('form-control');

        $.each(response['cities'], function (item, element) {
            selectList.append($('<option/>').attr('value', element.id).html(element.name));
        });

        if (response.length === 0) {
            selectList = $('<h3/>').html('Countries not found');
        }

        form.append(label);
        form.append(selectList);
    }

    function addLanguageTable(response) {
        $('.check_language').remove();

        let table = $('#check_tables');

        $.each(response['languages'], function (index, element) {
            let tr = $('<tr/>').addClass('check_language');

            tr.append($('<td/>').html(element.name));
            tr.append($('<td/>').html(element.code));

            table.append(tr);
        });
    }
});
