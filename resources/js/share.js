$(function ($) {
    function myStopFunction() {
        clearTimeout(errorMessages);
    }

    const errorMessages = setTimeout(function () {
        $(".error-message").css("display", "none");
    }, 5000);

    $(document).on("change", "#flag_id", function (e) {
        if (
            $("#flag_id").find(":selected").html() == "approved" ||
            $("#flag_id").find(":selected").html() == "waiting"
        ) {
            console.log('yes')
            var array = $(".roles option");
            for (let i = 0; i < array.length; i++) {
                const element = array[i];
                if ($(element).attr("dataname") == "admin") {
                    $(element).attr("disabled", "disabled").addClass("disabled-option");
                } else {
                    $(element).prop("selected","selected");
                }
            }
        }
        if ($("#flag_id").find(":selected").html() == "admin") {
            var array = $(".roles option");
            for (let i = 0; i < array.length; i++) {
                const element = array[i];
                if ($(element).attr("dataname") == "visitor") {
                    $(element).attr("disabled", "disabled").addClass("disabled-option");
                } else {
                    $(element).prop("selected","selected");
                }
            }
        }
    });
});
