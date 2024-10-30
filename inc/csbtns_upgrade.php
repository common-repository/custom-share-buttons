<?php

function upgrade_csbtns($arrSettings) {

	// add print button
	add_option('csbtns_custom_print', '');
	
	// new for 3.8
	add_option('csbtns_widget_text',	'Y');
	add_option('csbtns_rel_nofollow',	'');

	// update version number
	update_option('csbtns_version', '3.9');
}
	
?>
