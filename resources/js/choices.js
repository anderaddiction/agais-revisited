$(document).ready(function () {
    if ($("#continent_id").length > 0) {
        var continentChoices = new Choices(
            document.getElementById("continent_id")
        );
    }
    if ($("#country_id").length > 0) {
        var countryChoices = new Choices(document.getElementById("country_id"));
    }

    if ($("#state_id").length > 0) {
        var stateChoices = new Choices(document.getElementById("state_id"));
    }

    if ($("#municipality_id").length > 0) {
        var municiplaityChoices = new Choices(
            document.getElementById("municipality_id")
        );
    }

    if ($("#parish_id").length > 0) {
        var parishChoices = new Choices(document.getElementById("parish_id"));
    }

    if ($("#city_id").length > 0) {
        var cityChoices = new Choices(document.getElementById("city_id"));
    }

    if ($("#status").length > 0) {
        var statusChoices = new Choices(document.getElementById("status"));
    }

    if ($("#role_id").length > 0) {
        var roleChoices = new Choices(document.getElementById("role_id"));
    }

    if ($("#category_id").length > 0) {
        var categoryChoices = new Choices(
            document.getElementById("category_id")
        );
    }

    if ($("#gender").length > 0) {
        var genderChoices = new Choices(document.getElementById("gender"));
    }

    if ($("#urbanism_id").length > 0) {
        var urbanismChoices = new Choices(
            document.getElementById("urbanism_id")
        );
    }
});
