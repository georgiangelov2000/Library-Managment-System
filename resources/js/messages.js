$(function ($) {
    function myStopFunction() {
        clearTimeout(errorMessages);
        clearTimeout(successfullyMessages);

    }
});

const errorMessages = setTimeout(function () {
        $(".error-message").css("display", "none");
}, 5000);


const successfullyMessages=setTimeout(function () {
    $(".successfully-message").css("display", "none");
},5000)