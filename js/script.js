/* SMOOTH SCROLL */
$(function() {
  $('a.scroll[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


/* TOOLTIPS */
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/* TEXT EDITOR RESPONSIVE */
function initEditorResponsive() {
    $('#post-content img').addClass('img-responsive');
    $('#post-content table').addClass('table').addClass('table-striped').addClass('table-hover').wrap("<div class='table-responsive'></div>");
    $('#post-content iframe').removeAttr('style').removeAttr('width').removeAttr('height').addClass('embed-responsive-item').wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
}

/* COUNTER */
/*function counterInit(){
    $('.counter').each(function() {
      var $this = $(this),
      countTo = $this.attr('data-count');
        
      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },

      {

        duration: 8000,
        easing:'linear',
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum);
          //alert('finished');
        }

      });  
    });
};*/

/* HEADER CLASS ON SCROLL */
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $("header").addClass("smaller");
    } else {
        $("header").removeClass("smaller");
    }
});

/* SPONSOR CAROUSEL */
function initCarousel() {
    $('#sponsorCarousel').owlCarousel({
        merge:false,
        loop:false,
        margin:30,
        lazyLoad:false,
        center:false,
        nav: true,
        navText: [
           "<i class='fa fa-angle-left fa-2x' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right fa-2x' aria-hidden='true'></i>"
        ],
        autoplay: true,
        autoplayTimeout: 100,
        autoplayHoverPause: true,
        dots: false,
        dotsEach: false,
        responsive : {
            0 : {
                items: 2,
            },
            480 : {
                items: 3
            },
            768 : {
                items: 5,
            }
        },
    });
}

/* LETTERING */
function initLettering() {
    $(".lettering").lettering();
}