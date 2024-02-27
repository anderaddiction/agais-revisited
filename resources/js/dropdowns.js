$(document).ready(function () {
    //Varables Globales
    var token = $('meta[name="csrf-token"]').attr("content");

    //Get the states
    $("#country_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#state").data("route");
        $.ajax({
            type: "GET",
            url: url,
            data: { id: id },
            cache: false,
            dataType: "json",
            success: function (response) {
                $("#state_id").empty();
                $.each(response, function (index, value) {
                    $("#state_id").append(
                        "<option value='" +
                            value.id +
                            "'>" +
                            value.name +
                            "</option>"
                    );
                });
            },
        });
    });

    //Get the municipalies
    $("#state_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#municipality").data("route");
        $.ajax({
            type: "GET",
            url: url,
            data: { id: id },
            cache: false,
            dataType: "json",
            success: function (response) {
                $("#municipality_id").empty();
                $.each(response, function (index, value) {
                    $("#municipality_id").append(
                        "<option value='" +
                            value.id +
                            "'>" +
                            value.name +
                            "</option>"
                    );
                });
            },
        });
    });

    //Get the parishes
    $("#municipality_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#parish").data("route");
        $.ajax({
            type: "GET",
            url: url,
            data: { id: id },
            cache: false,
            dataType: "json",
            success: function (response) {
                $("#parish_id").empty();
                $.each(response, function (index, value) {
                    $("#parish_id").append(
                        "<option value='" +
                            value.id +
                            "'>" +
                            value.name +
                            "</option>"
                    );
                });
            },
        });
    });

    //Get the cities
    $("#state_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#city").data("route");
        $.ajax({
            type: "GET",
            url: url,
            data: { id: id },
            cache: false,
            dataType: "json",
            success: function (response) {
                $("#city_id").empty();
                $.each(response, function (index, value) {
                    $("#city_id").append(
                        "<option value='" +
                            value.id +
                            "'>" +
                            value.name +
                            "</option>"
                    );
                });
            },
        });
    });
});
