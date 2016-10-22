$(document).ready(function(){
    //$('.teachars ul').append("<li></li>").css("background", "url(../img/teachar/1.jpg) no-repeat");
    var getImageSrc = $('.teachars img').attr('../img/teachars/1.jpg');
    $('.backgroundDiv').css('background-image', 'url(' + getImageSrc + ')');
});
 