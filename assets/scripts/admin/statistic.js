//navigation bar
$('.provinces-list').hide();
$('.provinces').click(function () {
    $('.provinces-list').toggle();
});

$('.moz-section').show();
$('.south-section').hide();
$('.center-section').hide();
$('.north-section').hide();

$('.moz').click(function () {
    $('.south-section').slideUp(500);
    $('.center-section').slideUp(500);
    $('.north-section').slideUp(500);
    $('.moz-section').slideDown(1000);

});

$('.south').click(function () {
    $('.moz-section').slideUp(500);
    $('.center-section').slideUp(500);
    $('.north-section').slideUp(500);
    $('.south-section').slideDown(1000);
});

$('.center').click(function () {
    $('.moz-section').slideUp(500);
    $('.south-section').slideUp(500);
    $('.north-section').slideUp(500);
    $('.center-section').slideDown(1000);
});

$('.north').click(function () {
    $('.moz-section').slideUp(500);
    $('.south-section').slideUp(500);
    $('.center-section').slideUp(500);
    $('.north-section').slideDown(1000);
});