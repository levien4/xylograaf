$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  $('header').css({
    'background-position': 'center -'+ (wScroll /8) +'px'
  });

  //$('.window').css({
  //  'opacity': ''+ (wScroll / $(window).height()) +''
  //});
  $('.window').css({
    'background-position': 'center -'+ (wScroll /8) +'px'
  });
});
