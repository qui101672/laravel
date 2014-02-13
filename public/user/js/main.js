;(function ($, window, undefined) {

	'use strict'; //jshint :)

  //arrow animation
  

  $("#info-activator").on({
    click : function(e) {
        e.preventDefault();
        var $dropInfo = $('.dropdown-info');

        $(this).children('i').toggleClass('icon-angle-down icon-angle-up');

        if( $dropInfo.hasClass('drop-animated') ){

          $dropInfo.animate({
            "top" : '-=38'
          }).removeClass('drop-animated');

          return;
        }
        $dropInfo.animate({
          "top" : 0
        }).addClass('drop-animated');
    }
    
  });

	 //DropDowns Animation
    
   $('ul.nav li.dropdown').on({
    mouseenter: function (){
        $(this).find('>.dropdown-menu').stop(true,true).delay(200).slideDown();
    },
    mouseleave: function (){
        $(this).find('>.dropdown-menu').stop(true,true).delay(200).slideUp();
    }
   });
    
  if( $('#flex1').length > 0  ) {
       $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          slideshowSpeed: 5500,
          animationSpeed: 1000,
          smoothHeight: true,
          controlNav: true,
          directionNav: true
          
        });
      });

  };

    //Portfolio effects Isotope // Filters
    
    (function(){

        var $portfolioContainer = $('#portfolio-container'), $filters= $('#filters');
      
        if($portfolioContainer.length && $().isotope){
      
          $portfolioContainer.imagesLoaded( function(){
            $portfolioContainer.isotope({
              // options...
              // resizable: false
              // itemSelector : '.element'
               
            });
          });
      
          $filters.find('a').click(function(){
            var $this = $(this), selector = $this.attr('data-filter');
            //checked if already has a class selected and do nothing
            if($this.hasClass('selected')){
              return false;
            }
            //checked if the one that i'm clickin doesn't have the class then find the one that has the class
            //and removed the class after that
            $this.parents($filters).find('.selected').removeClass('selected');
            //Just add the class selected to the new item
            $this.addClass('selected');
      
            $portfolioContainer.isotope({
              filter: selector
            });
            return false;
          });
        } //end if
        else{
          return;
        }
      
      })();

      //Custom Collapse Effect
      $('.collapse').on('show', function () {
        $(this)
            .parent()
                .find('.plus-arrow').text('-');
      });
      $('.collapse').on('hide', function () {
        $(this)
            .parent()
                .find('.plus-arrow').text('+');
      });

	

})(window.jQuery, window, undefined);