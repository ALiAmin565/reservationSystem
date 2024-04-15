$(document).ready(function () {
    "use strict";
    $(".signupBtn").click(function () {
        $(".signupDiv").addClass('active');
        $(".signinDiv").removeClass('active').removeClass('active2');
    });
    $(".signupBtn2").click(function () {
        $(".signupDiv").addClass('active');
        $(".signinDiv").removeClass('active').removeClass('active2');
    });
    $(".signupOverlay").click(function () {
        $(".signupDiv").removeClass('active');
    });


    $(".signinBtn").click(function () {
        $(".signinDiv").addClass('active');
        $(".signupDiv").removeClass('active');
    });
    $(".signinBtn2").click(function () {
        $(".signinDiv").addClass('active');
        $(".signupDiv").removeClass('active');
    });
    $(".signinOverlay").click(function () {
        $(".signinDiv").removeClass('active').removeClass('active2');
    });

    $(".signrecBtn").click(function () {
        $(".signinDiv").removeClass('active');
        $(".signinDiv").addClass('active2');
        $(".signupDiv").removeClass('active');
    });
    $(".signrecOverlay").click(function () {
        $(".signinDiv").removeClass('active2').removeClass('active');
    });
});