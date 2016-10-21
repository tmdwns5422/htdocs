var app ={
 init: function(){
  app.resize();
 },
 resize: function(){
    var height = $('.content').css('height',($(window).height()-$("header").height()));
    $(window).resize(function(){
     $('.content').css('height',height);
    });
 },
}
app.init();
