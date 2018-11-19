(function($) {

	"use strict";

	$(document).on('click','.btn-mobile',function(e) {
		$('.menu-item-has-children').find('ul').hide();
	});

	$(document).on("click","#topMain li", function (event) {
		var clickedBtnID = $(this).attr('id');
		//$('#'+clickedBtnID).find('ul').show();
		$('#'+clickedBtnID).find('ul').toggle();
		
	});

    $(document).ready(function() {
        //Show dropdown on hover only for desktop devices
        //-----------------------------------------------
        if ($(window).width() > 975) {
                $('.main-navigation:not(.onclick) .navbar-nav>li.menu-item-has-children, .main-navigation:not(.onclick) li.menu-item-has-children>ul>li').hover(
                function() {
                    $(this).addClass('show');
                    $(this).find('>.dropdown-menu').addClass('show');
                }, function() {
                    $(this).removeClass('show');
                    $(this).find('>.dropdown-menu').removeClass('show');
                });
        };

        //Show dropdown on click only for mobile devices
        //-----------------------------------------------
        if ($(window).width() < 974 || $("li.menu-item-has-children.onclick").length>0 ) {
            $('.header [data-toggle=dropdown], .header-top [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('show');
                $(this).parent().siblings().find('.dropdown-menu').removeClass('show');
                $(this).parent().siblings().find('[data-toggle=dropdown]').parent().removeClass('show');
                $(this).parent().toggleClass('show');
                $(this).siblings('.dropdown-menu').toggleClass('show');
            });
        };

        $("ul.dropdown-menu li a").removeClass();
    }); // End document ready

})(jQuery);
