
jQuery( document ).ready(function() {
	jQuery(".youtube-popup").colorbox({iframe:true, innerWidth:640, innerHeight:390});
	jQuery(".tabla-comp-quimica").colorbox();
	
	jQuery(".submenu ul").append('<li><span><span><a href="#block-views-productos-block-1">Especiales</a></span></span></li>');
	
	
	/* TABS */
	jQuery("#block-views-productos-block-1 .view-content ul li:first-child").addClass('active');
	jQuery('#block-views-productos-block-1 .view-content ul li a').click(function(e)  {
		e.preventDefault();
        var currentAttrValue = jQuery(this).attr('href');
        // Show/Hide Tabs
		jQuery('#block-views-productos-block-2 .view-productos .views-row').hide();
		console.log(jQuery('#block-views-productos-block-2 .view-productos .views-row').find(currentAttrValue));
        jQuery('#block-views-productos-block-2 .view-productos .views-row').find(currentAttrValue).fadeIn(400);
 
        // Change/remove current tab to active
        //jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        
    });	
	
	
});

