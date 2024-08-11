$(document).ready(function() {
    $("#open").click(function() {
        $("#open").css("margin-left", "250px");
        $("#open").css("transition", "margin-left .5s;");
    });
    $("#open").click(function() {
        $(".contents").css("margin-left", "250px");
        $(".contents").css("transition", "margin-left .5s;");
    });
});
$(document).ready(function() {
    $("#close").click(function() {
        $(".contents").css("margin-left", "0px");
        $("#open").css("margin-left", "0px");
    });
});