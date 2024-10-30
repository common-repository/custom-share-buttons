jQuery(document).ready(function() {

	//------- INCLUDE LIST ----------//

	// add drag and sort functions to include table
	jQuery(function() {
		jQuery( "#csbtnssort1, #csbtnssort2" ).sortable({
			connectWith: ".connectedSortable"
		}).disableSelection();
	  });
	 
	// extract and add include list to hidden field
	jQuery('#csbtns_selected_buttons').val(jQuery('#csbtnssort2 li').map(function() {
	// For each <li> in the list, return its inner text and let .map()
	//  build an array of those values.
	return jQuery(this).attr('id');
	}).get());
	  
	// after a change, extract and add include list to hidden field
	jQuery('.csbtns-include-list').mouseout(function() {
		jQuery('#csbtns_selected_buttons').val(jQuery('#csbtnssort2 li').map(function() {
		// For each <li> in the list, return its inner text and let .map()
		//  build an array of those values.
		return jQuery(this).attr('id');
		}).get());
	});
	  

	
	//------- TABS -----------//
	
	// basic tab
	jQuery('#csbtns_tab_basic').click(function(){
	
		// hide other tabs in case needed
		jQuery("#csbtns_settings_styling").hide();
		jQuery("#csbtns_settings_advanced").hide();
		jQuery("#csbtns_settings_counters").hide();
		
		// remove selected classes if needed
		jQuery('#csbtns_tab_styling').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_advanced').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_counters').removeClass('csbtns-selected-tab');
		
		// show chosen tab
		jQuery("#csbtns_settings_basic").show();
		
		// add selected tab class
		jQuery('#csbtns_tab_basic').addClass('csbtns-selected-tab');
	}); 
	
	// styling tab
	jQuery('#csbtns_tab_styling').click(function(){
	
		// hide other tabs
		jQuery("#csbtns_settings_basic").hide();
		jQuery("#csbtns_settings_advanced").hide();
		jQuery("#csbtns_settings_counters").hide();
		
		// remove selected classes if needed
		jQuery('#csbtns_tab_basic').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_advanced').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_counters').removeClass('csbtns-selected-tab');
		
		// show chosen tab
		jQuery("#csbtns_settings_styling").show();
		
		// add selected tab class
		jQuery('#csbtns_tab_styling').addClass('csbtns-selected-tab');
	}); 
	
	// counters tab
	jQuery('#csbtns_tab_counters').click(function(){
	
		// hide other tabs
		jQuery("#csbtns_settings_basic").hide();
		jQuery("#csbtns_settings_advanced").hide();
		jQuery("#csbtns_settings_styling").hide();
		
		// remove selected classes if needed
		jQuery('#csbtns_tab_basic').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_advanced').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_styling').removeClass('csbtns-selected-tab');
		
		// show chosen tab
		jQuery("#csbtns_settings_counters").show();
		
		// add selected tab class
		jQuery('#csbtns_tab_counters').addClass('csbtns-selected-tab');
	}); 
	
	// advanced tab
	jQuery('#csbtns_tab_advanced').click(function(){
	
		// hide other tabs
		jQuery("#csbtns_settings_basic").hide();
		jQuery("#csbtns_settings_styling").hide();
		jQuery("#csbtns_settings_counters").hide();
		
		// remove selected classes if needed
		jQuery('#csbtns_tab_basic').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_styling').removeClass('csbtns-selected-tab');
		jQuery('#csbtns_tab_counters').removeClass('csbtns-selected-tab');
		
		// show chosen tab
		jQuery("#csbtns_settings_advanced").show();
		
		// add selected tab class
		jQuery('#csbtns_tab_advanced').addClass('csbtns-selected-tab');
	}); 
	
	// color picker
	jQuery('#csbtns_font_color').wpColorPicker();
	jQuery('#csbtns_div_border').wpColorPicker();
	jQuery('#csbtns_div_background').wpColorPicker();
	
	// when custom style button is clicked
	jQuery('#csbtns_button_custom_styles').click(function(){
	
		// hide show custom css and hide normal settings
		jQuery("#csbtns_option_custom_css").show(600);
		jQuery("#csbtns_normal_settings").hide(600);
	}); 
	
	// when assisted CSS button is clicked
	jQuery('#csbtns_button_normal_settings').click(function(){
	
		// hide show custom css and hide normal settings
		jQuery("#csbtns_normal_settings").show(600);
		jQuery("#csbtns_option_custom_css").hide(600);
		
		// clear the contents of the custom css field
		// this must be done so that the custom styles don't
		// continue to overwrite other styles
		jQuery('#csbtns_custom_styles').val('');
	}); 
	
	// when counter CSS is clicked
	jQuery('#csbtns_counter_normal_settings').click(function(){
	
		// hide show custom css and hide normal settings
		jQuery("#csbtns_counter_settings").show(600);
		jQuery("#csbtns_counter_custom_css").hide(600);
		
		// clear the contents of the custom css field
		// this must be done so that the custom styles don't
		// continue to overwrite other styles
		jQuery('#csbtns_share_count_css').val('');
	}); 
	
	// when when counter CSS is clicked
	jQuery('#csbtns_counter_custom_styles').click(function(){
	
		// hide show custom css and hide normal settings
		jQuery("#csbtns_counter_custom_css").show(600);
		jQuery("#csbtns_counter_settings").hide(600);
	}); 
	
	// when changing image sets
	jQuery('#csbtns_image_set').change(function(){
	
		if (jQuery("#csbtns_image_set").val() == "custom" ) { 
			jQuery("#csbtns-custom-images").show(600);
        }
        if(jQuery("#csbtns_image_set").val() != "custom" ) { 
			jQuery("#csbtns-custom-images").hide(600);
        }
	}); 

	// ----- IMAGE UPLOADS ------ //	 

	// custom image upload
	jQuery('.customUpload').click(function() {
	
		// get custom data field for the text field to return the url to
		var strInputID = jQuery(this).data('csbtns-input');
		
		// simple function to change button text after loading window
		csbtns_tb_interval = setInterval( function() { 
			jQuery('#TB_iframeContent').contents().find('.savesend .button').val('Use this image'); 
		}, 200 );
		
		// load thickbox window with upload options
		tb_show('Upload Image', 'media-upload.php?type=image&amp;TB_iframe=true');
		
		// send image back to the text field
		window.send_to_editor = function(html) {
			imgurl = jQuery('img',html).attr('src');
			jQuery('#' + strInputID).val(imgurl);
			tb_remove();
		};
		
		return false;
	});

});
