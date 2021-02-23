jQuery(function(){
	function readTextFile(file){
		var rawFile = new XMLHttpRequest();
		rawFile.open('GET', file, true);
		rawFile.onreadystatechange = function(){
		if(rawFile.readyState === 4){
			if(rawFile.status === 200 || rawFile.status === 0){
				var allText = rawFile.responseText;
				jQuery('head').append('<style>'+allText+'</style>');
				}
			}
		};
		rawFile.send(null);
	}

	jQuery('#wp-admin-bar-wp-logo').remove();
	jQuery('#wp-admin-bar-site-name > .ab-item').attr('target','_blank');
	jQuery('#wp-admin-bar-view-site > .ab-item').attr('target','_blank');
	jQuery('#wpfooter #footer-thankyou').html('Powered by <a href="http://www.theagiletech.com/">Agile Technologies</a>.');

	jQuery('#posts-filter table.wp-list-table.tags thead tr, #posts-filter table.wp-list-table.tags tfoot tr').prepend('<td class="idHolder">ID</td>');
	function addCatID(){
		jQuery('#posts-filter table.wp-list-table.tags tbody tr').each(function(){
			if(jQuery(this).find('td.catID').length<1){
				var thisID = jQuery(this).attr('id');
				thisID = thisID.replace('tag-','');
				jQuery(this).prepend('<td class="catID">'+thisID+'</td>');
			}
		});
	}addCatID();


	jQuery(document).ajaxComplete(function(){
		addCatID();
	});
	// // iFrame in dashboard
	// if(jQuery('#menu-dashboard.current.menu-top, #menu-dashboard li.wp-first-item.current').length>0){
	// 	jQuery('#wpbody-content .wrap').html('');
	// 	var src = jQuery('#wp-admin-bar-site-name > a').attr('href');
	// 	var frame = '<iframe id="thisSite" frameborder="0" src="'+src+'" seamless="seamless" frameborder="0" allowtransparency="true"></iframe>';
	// 	jQuery('#wpcontent').prepend(frame);
	// 	readTextFile('../wp-content/themes/iframeVision.css'); // location must be: "/wp-content/themes/iframeVision.css"
	// }
	// Hide Main Category who has Sub categories, Decrease checkbox left margin 
	if(jQuery('#local-storage-notice').after('form#post').length>0){
		jQuery('form#post #categorydiv #category-13 > .selectit, form#post #categorydiv #category-2 > .selectit, form#post #categorydiv #category-8 > .selectit').hide();
		jQuery('ul.categorychecklist ul').css('margin-left','16px');
	}
	jQuery('#posts-filter .alignleft #filter-by-date').attr('onchange','this.form.submit()');
	jQuery('#posts-filter .alignleft #cat').attr('onchange','this.form.submit()');

});
