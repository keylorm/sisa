
jQuery( document ).ready(function() {
	jQuery(".youtube-popup").colorbox({iframe:true, innerWidth:640, innerHeight:390});
	jQuery(".tabla-comp-quimica").colorbox();
	
	jQuery(".page-node-9 .submenu ul").append('<li><span><span><a href="#block-views-productos-block-1" class="scroll">Especiales</a></span></span></li>');
	
	
	/* TABS */
	jQuery("#block-views-productos-block-1 .view-content ul li:first-child").addClass('active');
	jQuery('#block-views-productos-block-1 .view-content ul li a').click(function(e)  {
		e.preventDefault();
        var currentAttrValue = jQuery(this).attr('href');
        // Show/Hide Tabs
		jQuery('#block-views-productos-block-2 .view-productos .views-row').hide();
        jQuery('#block-views-productos-block-2 .view-productos .views-row'+currentAttrValue).fadeIn(400);
 
        // Change/remove current tab to active
        jQuery(this).parent('div').parent('div').parent('li').addClass('active').siblings().removeClass('active'); 
    });	
	/****************************/
	
	<!--Scroll-->
	jQuery('a.scroll[href^="#"]').live('click', function(e) {
		e.preventDefault();

		var target = this.hash,
		$target = jQuery(target);

		jQuery('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function() {
			window.location.hash = target;
		});
	});	
	
});

