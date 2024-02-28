$(document).ready(function () {
    //Varables Globales
    var token = $('meta[name="csrf-token"]').attr("content");
    if ($("#country_id").length > 0) {
        var countryChoices = new Choices(document.getElementById("country_id"));
    }
    if ($("#status").length > 0) {
        var countryChoices = new Choices(document.getElementById("status"));
    }

    if ($("#category_id").length > 0) {
        var countryChoices = new Choices(
            document.getElementById("category_id")
        );
    }

    if ($("#gender").length > 0) {
        var countryChoices = new Choices(document.getElementById("gender"));
    }

    if ($("#role_id").length > 0) {
        var countryChoices = new Choices(document.getElementById("role_id"));
    }

    //Get the states
    $("#country_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#state_id").data("route");
        $.ajax({
            type: "GET",
            url: url,
            data: { id: id },
            cache: false,
            dataType: "json",
            success: function (response) {
                $("#state_id").empty();
                $("#municipality_id").empty();
                $("#parish_id").empty();
                $("#city_id").empty();
                // var stateChoices = new Choices(
                //     document.getElementById("state_id")
                // );
                //stateChoices.clearChoices();
                $.each(response, function (index, value) {
                    $("#state_id").append(
                        $("<option></option>")
                            .attr("value", value.id)
                            .text(value.name)
                    );
                    // stateChoices.setChoices(
                    //     [
                    //         {
                    //             value: value.id,
                    //             label: value.name,
                    //         },
                    //     ],
                    //     "value",
                    //     "label",
                    //     false
                    // );
                });
            },
        });
    });

    //Get the municipalies
    $("#state_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#municipality_id").data("route");
        $.ajax({
            type: "GET",
            url: url,
            data: { id: id },
            cache: false,
            dataType: "json",
            success: function (response) {
                $("#municipality_id").empty();
                $("#city_id").empty();
                // var municiplaityChoices = new Choices(
                //     document.getElementById("municipality_id")
                // );
                $.each(response, function (index, value) {
                    $("#municipality_id").append(
                        "<option value='" +
                            value.id +
                            "'>" +
                            value.name +
                            "</option>"
                    );
                    // municiplaityChoices.setChoices(
                    //     [
                    //         {
                    //             value: value.id,
                    //             label: value.name,
                    //         },
                    //     ],
                    //     "value",
                    //     "label",
                    //     false
                    // );
                });
            },
        });
    });

    //Get the parishes
    $("#municipality_id").change(function (e) {
        e.preventDefault();
        var id = $(this).val();
        var url = $("#parish_id").data("route");
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
        var url = $("#city_id").data("route");
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
