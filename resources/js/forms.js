$(document).ready(function () {
    //Varables Globales
    var token = $('meta[name="csrf-token"]').attr('content');
    var route = $('#form').attr('action');

    //Create
    $(".btn-save").click(function (e) {
        e.preventDefault();
        var formData = $('#form').serialize();

        $.ajax({
            type: "POST",
            url: route,
            data: formData,
            success: function (response) {
                $('#form')[0].reset();
                $('.required').removeClass('is-invalid');
                Swal.fire({
                    title: 'Felicidades',
                    text: response.success,
                    icon: 'success',
                    confirmButtonColor: '#038edc',
                });
            },
            statusCode: {
                500: function() {
                // Server error
                },
                422: function(response) {
                    var errors = response.responseJSON;
                    if ($.isEmptyObject(errors) == false)
                    {
                        $.each(errors.errors, function(key, value) {
                            var ErrorID = '#' + key +'Error';
                            $(ErrorID).removeClass('d-none');
                            $(ErrorID).text(value).show();
                            $('.required').addClass('is-invalid');
                        });
                    }
                }
            }
        });
    });

    //Update
    $(".btn-update").click(function (e) {
        e.preventDefault();
        var formData = $('#form').serialize();
        $.ajax({
            type: "PUT",
            url: route,
            headers: {'X-CSRF-Token': token},
            data: formData,
            dataType: 'json',
            success: function (response) {
                Swal.fire({
                    title: 'Felicidades',
                    text: response.success,
                    icon: 'success',
                    confirmButtonColor: '#038edc',
                });
            },
            error: function (response) {
                var errors = response.responseJSON;
                if ($.isEmptyObject(errors) == false) {
                    $.each(errors.errors, function (key, value) {
                        var ErrorID = '#' + key + 'Error';
                        $(ErrorID).removeClass('d-none');
                        $(ErrorID).text(value).show();
                        $('.required').addClass('is-invalid');
                    });
                }
            }
        });
    });
});
