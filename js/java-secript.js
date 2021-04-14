$(document).ready(
    $(".sigin-in-button").click(function()
{
    $(".sigin-in-button").addClass('tab-active');
    $(".login-button").removeClass('tab-active');
    $(".login").hide();
    $(".sigin-in").fadeIn(600);   
})
)


$(document).ready(
    $(".login-button").click(function()
{
    $(".login-button").addClass('tab-active');
    $(".sigin-in-button").removeClass('tab-active');
    $(".sigin-in").hide()
    $(".login").fadeIn(600);
})
);

$(document).ready(
    $("#part1").click(function()
{
    $("#part1").addClass('tab-active');
    $("#part2").removeClass('tab-active');
    $("#part3").removeClass('tab-active');
    $("#part2_bar").hide()
    $("#part3_bar").hide()
    $("#part1_bar").fadeIn(600);
})
);

$(document).ready(
    $("#part2").click(function()
{
    $("#part2").addClass('tab-active');
    $("#part1").removeClass('tab-active');
    $("#part3").removeClass('tab-active');
    $("#part1_bar").hide()
    $("#part3_bar").hide()
    $("#part2_bar").fadeIn(600);
})
);

$(document).ready(
    $("#part3").click(function()
{
    $("#part3").addClass('tab-active');
    $("#part1").removeClass('tab-active');
    $("#part2").removeClass('tab-active');
    $("#part1_bar").hide()
    $("#part2_bar").hide()
    $("#part3_bar").fadeIn(600);
})
);