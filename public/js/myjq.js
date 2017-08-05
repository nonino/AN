$(document).ready(function () {
    $(".hideme").click(function () {
        $("#test1").hide(1000);
    });
    $(".show").click(function () {
        $("#test1").show();
    });
});
