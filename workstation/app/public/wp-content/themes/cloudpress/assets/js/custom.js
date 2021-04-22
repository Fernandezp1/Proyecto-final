( function ($) {
  // remove box on click 
    $("a").keypress(function() {
       this.blur();
       this.hideFocus = false;
       this.style.outline = null;
        });
        $("a").mousedown(function() {
             this.blur();
             this.hideFocus = true;
             this.style.outline = 'none';
        });
/* ---------------------------------------------- /*
         * Home section height
         /* ---------------------------------------------- */

        function cloudpress_buildHomeSection(homeSection) {
            if (homeSection.length > 0) {
                if (homeSection.hasClass('home-full-height')) {
                    homeSection.height($(window).height());
                } else {
                    homeSection.height($(window).height() * 0.85);
                }
            }
        }

// Fullscreen Serach Box    

    $(function() {      
      $('a[href="#searchbar_fullscreen"]').on("click", function(event) {    
        
        event.preventDefault();
        $("#searchbar_fullscreen").addClass("open");
        $('#searchbar_fullscreen > form > input[type="search"]').focus();
      });

      $("#searchbar_fullscreen, #searchbar_fullscreen button.close").on("click keyup", function(event) {
        if (
          event.target == this ||
          event.target.className == "close" ||
          event.keyCode == 27
        ) {
          $(this).removeClass("open");
        }
      });

    });


        jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length ) {
                jQuery("li.dropdown ul").css("display", "none");
            }
       })

      jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length && ( jQuery(window).width() <= 992) ) {
                jQuery('.navbar-collapse').removeClass('show');
      }})

})(jQuery);