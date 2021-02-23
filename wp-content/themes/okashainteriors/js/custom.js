// window.onload = function(){
// 	jQuery('.se-pre-con').fadeOut('slow', function(){
// 		jQuery(this).remove();
// 	});
// };
jQuery(function(){
	var winLoc = window.location.href;

	jQuery('img').removeAttr('width').removeAttr('height');
	
	jQuery('.post_description p').each(function(){
		if(jQuery(this).html()==='&nbsp;' || jQuery(this).html()==='' ){
			jQuery(this).remove();
		}
	});

	if(jQuery('.services-wrap img').length>0){
		jQuery('.services-wrap img').each(function(){
			var src = jQuery(this).attr('src');
			jQuery(this).wrap('<a href="'+src+'" data-fancybox="serviceGrid"></a>');
		});
	}
	if(jQuery('.post_description img').length>0){
		jQuery('.post_description img').each(function(){
			var src = jQuery(this).attr('src');
			jQuery(this).wrap('<a href="'+src+'" data-fancybox="post_description"></a>');
		});
	}
	

	jQuery('button.res_button').on('click', function(){
		jQuery('body').toggleClass('menuOpen');
	});

	jQuery('.contact-info li.address:eq(0)').addClass('addressTxt');
	jQuery('.contact-info li.email:eq(0)').addClass('emailTxt');
	jQuery('.contact-info li.phone:eq(0)').addClass('phoneTxt');
	
	jQuery('.detailInfo li.address:eq(0)').addClass('addressTxt');
	jQuery('.detailInfo li.email:eq(0)').addClass('emailTxt');
	jQuery('.detailInfo li.phone:eq(0)').addClass('phoneTxt');

	if (jQuery('.single-item').length) {
        jQuery('.single-item').slick({
            arrows: true,
            dots: true,
            autoplay: true,
			infinite: true,
			initialSlide: 1,
			prevArrow: '<span class="slick-prev aboutSArrows"></span>',
			nextArrow: '<span class="slick-next aboutSArrows"></span>'
        });
    }

	if(jQuery('.categoryTabs').length){
		jQuery('.categoryTabs li').removeClass('active');
		jQuery('.categoryTabs li').each(function(){
			if(jQuery(this).find('a').attr('href')===winLoc){
				jQuery(this).addClass('active');
			}
		});
	}

	if(jQuery('.num_pagination .prevLink a').html()==='« Previous Page'){
		jQuery('.num_pagination .prevLink a').html('&#x276e;');
	}
	if(jQuery('.num_pagination .nextLink a').html()==='Next Page »'){
		jQuery('.num_pagination .nextLink a').html('&#x276f;');
	}

});