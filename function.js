if ( $(window).width() > 1000) {
  $(window).scroll(function(){

    var wScroll = $(this).scrollTop();

    $('header').css({
      'background-position': 'center -'+ (wScroll /8) +'px'
    });

    $('.more').css({
      'opacity': ''+ (($(window).height() - wScroll * 3) / 1000) +''
    });

    $('.window').css({
      'background-position': 'center -'+ (wScroll /8) +'px'
    });
  });

  $(function() {
      $(".read").on("click", function() {
          $("body").animate({"scrollTop": window.scrollY + (window.innerHeight - 500)}, 2000);
          return false;
      });
  });
  //Add your javascript for large screens here
}
else {
  //Add your javascript for small screens here
}
