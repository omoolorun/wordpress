jQuery(document).ready(function(){
	
	jQuery(window).load(function() {
		
		// menu dropDown
		jQuery('.menu-top li').hover(function(){
			jQuery(this).children('a').addClass('hover');
			jQuery(this).children('.sub-menu').stop().slideDown(200);
		}, function(){
			jQuery(this).children('a').removeClass('hover');
			jQuery(this).children('.sub-menu').stop().slideUp(200);
		});
		jQuery('.menu-top-mob-container .menu-icon').click(function(e){
			e.preventDefault();
		}).toggle(function(){
			jQuery(this).parent('.menu-top-mob-container').find('.menu-top-mob').stop().slideDown(200);
		}, function(){
			jQuery(this).parent('.menu-top-mob-container').find('.menu-top-mob').stop().slideUp(200);
		});
		
		// Owl Carousel
		jQuery(".theme-carousel").owlCarousel({
			// Most important owl features
			singleItem : true,
			itemsCustom : false,
			itemsScaleUp : false, 
			//Basic Speeds
			slideSpeed : 200,
			paginationSpeed : 800,
			rewindSpeed : 1000, 
			//Autoplay
			autoPlay : true,
			stopOnHover : true, 
			// Navigation
			navigation : false,
			navigationText : ["prev","next"],
			rewindNav : true,
			scrollPerPage : false, 
			//Pagination
			pagination : true,
			paginationNumbers: false, 
			// Responsive
			responsive: true,
			responsiveRefreshRate : 100,
			responsiveBaseWidth: window,
			// CSS Styles
			baseClass : "owl-carousel",
			theme : "owl-theme",
			//Lazy load
			lazyLoad : false,
			lazyFollow : true,
			lazyEffect : "fade",
			//Auto height
			autoHeight : false,
			//JSON
			jsonPath : false,
			jsonSuccess : false,
			//Mouse Events
			dragBeforeAnimFinish : true,
			mouseDrag : true,
			touchDrag : true,
			//Transitions
			transitionStyle : 'fade',
			// Other
			addClassActive : false
		});
		jQuery(".testimonials-carousel").owlCarousel({
			// Most important owl features
			items : 3,
			itemsCustom : false,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [980,2],
			itemsTablet: [768,2],
			itemsMobile : [479,1],
			singleItem : false,
			itemsScaleUp : false,
			//Basic Speeds
			slideSpeed : 200,
			paginationSpeed : 800,
			rewindSpeed : 1000,
			//Autoplay
			autoPlay : true,
			stopOnHover : true,
			// Navigation
			navigation : false,
			navigationText : ["prev","next"],
			rewindNav : true,
			scrollPerPage : false,
			//Pagination
			pagination : true,
			paginationNumbers: false,
			// Responsive
			responsive: true,
			responsiveRefreshRate : 100,
			responsiveBaseWidth: window,
			// CSS Styles
			baseClass : "owl-carousel",
			theme : "owl-theme",
			//Lazy load
			lazyLoad : false,
			lazyFollow : true,
			lazyEffect : "fade",
			//Auto height
			autoHeight : false,
			//JSON
			jsonPath : false,
			jsonSuccess : false,
			//Mouse Events
			dragBeforeAnimFinish : true,
			mouseDrag : true,
			touchDrag : true,
			//Transitions
			transitionStyle : 'fade',
			// Other
			addClassActive : false
		});
		
		// item hover overlay
		jQuery('.portfolio-item, .article-image, .instagram-post').hover(function(){
			jQuery(this).find('a.fa').stop().fadeIn(200);
		}, function(){
			jQuery(this).find('a.fa').stop().fadeOut(200);
		});
		
		// input focus
		jQuery(".comment-form :text, .comment-form textarea, .contact-form .text, .contact-form .textarea").focus(function(){
			var value = jQuery(this).attr("value");
			if (value == "")
			var attrfor = jQuery(this).attr('id');
			jQuery("label[for=" + attrfor + "]").css({"display":"none"});
		});
		jQuery(".comment-form :text, .comment-form textarea, .contact-form .text, .contact-form .textarea").blur(function(){
			var value = jQuery(this).attr("value");
			if (value == "")
			var attrfor = jQuery(this).attr('id');
			jQuery("label[for=" + attrfor + "]").css({"display":"block"});
		});
		
		// faq-item toggle
		jQuery('.faq-item.collapsed h6').click().toggle(function(){
			jQuery(this).parent('.faq-item').removeClass('collapsed').addClass('expanded');
			jQuery(this).parent('.faq-item').find('.answer').stop().slideDown(200);
		}, function(){
			jQuery(this).parent('.faq-item').removeClass('expanded').addClass('collapsed');
			jQuery(this).parent('.faq-item').find('.answer').stop().slideUp(200);
		});
		
		// filter
		
		// some css fixe
		jQuery('.menu-top .sub-menu li:first-child, .menu-top-mob > li:first-child').addClass('first-child');
		jQuery('.menu-top li:last-child, .meta span:last-child, .article-info li:last-child, .share li:last-child, .widget-latest-post .article-latest-post.last-child').addClass('last-child');
		jQuery('.section-services .section-row:even').addClass('even');
		
	}); // Final load
	
}); // Final ready