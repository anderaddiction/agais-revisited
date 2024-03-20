$(document).ready(function () {
    //Varables Globales
    var token = $('meta[name="csrf-token"]').attr("content");
    var route = $("#form").attr("action");
    var form = $("#form")[0];

    //Create
    $(".btn-save").click(function (e) {
        e.preventDefault();
        var formData = new FormData(form);
        $.ajax({
            url: route,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (response) {
                $("#form")[0].reset();
                $(".required").removeClass("is-invalid");
                Swal.fire({
                    title: "Felicidades",
                    text: response.success,
                    icon: "success",
                    confirmButtonColor: "#038edc",
                });
            },
            statusCode: {
                500: function () {
                    // Server error
                },
                422: function (response) {
                    var errors = response.responseJSON;
                    if ($.isEmptyObject(errors) == false) {
                        $.each(errors.errors, function (key, value) {
                            var ErrorID = "#" + key + "Error";
                            $(ErrorID).removeClass("d-none");
                            $(ErrorID).text(value).show();
                            $(".required").addClass("is-invalid");
                        });
                    }
                },
            },
        });
    });

    //Update
    $(".btn-update").click(function (e) {
        e.preventDefault();
        var formData = new FormData(form);
        $.ajax({
            url: route,
            type: "POST",
            headers: { "X-CSRF-Token": token },
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (response) {
                Swal.fire({
                    title: "Felicidades",
                    text: response.success,
                    icon: "success",
                    confirmButtonColor: "#038edc",
                });
            },
            error: function (response) {
                var errors = response.responseJSON;
                if ($.isEmptyObject(errors) == false) {
                    $.each(errors.errors, function (key, value) {
                        var ErrorID = "#" + key + "Error";
                        $(ErrorID).removeClass("d-none");
                        $(ErrorID).text(value).show();
                        $(".required").addClass("is-invalid");
                    });
                }
            },
        });
    });
});
