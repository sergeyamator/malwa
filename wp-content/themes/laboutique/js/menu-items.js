( function( $ ) {
	"use strict";

	$(document).ready(function(){
		$('body').on('click', '.menu .sub-menu .menu-item', function(event){
			event.preventDefault();
			$(this).toggleClass('active').siblings('li').removeClass('active');
			$(this).siblings('li').find('.sub-menu').slideUp('slow');
			$(this).find('> .sub-menu').toggle('slow');

			var href = $(this).find('> a').attr('href'),
				type = href.split('/');
			type = type[type.length-2];
			type = decodeURI(type);
			console.log(type);

			var state = {
				title: '',
				url: href,
				cat: type
			}

			history.pushState( state, state.title, state.url );
			show_ajax_preloader();
			$('.post-list').isotope('destroy');
			// $('.paging-navigation').hide();

			$.ajax({
				url: ajaxcontent.ajaxurl,
				type: 'post',
				data: {
					action: 'ajax_content',
					cat: type
				},
				success: function( result ) {
					$('#isotope_content_dummy').remove();
					$('#isotope_content').html('');
					$('<div id="isotope_content_dummy" style="display: none;"></div>').insertAfter('#isotope_content');
					$('#isotope_content_dummy').append(result);

					$('#isotope_content_dummy img').imagesLoaded(function(){
						$('#isotope_content').css({'display':'block'}).isotope({
							itemSelector: '.item',
							masonry:{
								columnWidth: 100
							}
						}).isotope('insert',$('#isotope_content_dummy .item'),init_nav);
					});
					remove_ajax_preloader();
				}
			});

			event.stopPropagation();
		});


		$('body').on('click', '.menu > .menu-item', function(event) {
			event.preventDefault();
			$(this).toggleClass('active').siblings('li').removeClass('active');
			$(this).siblings('li').find('.sub-menu').slideUp('slow')
			$(this).find('> .sub-menu').toggle('slow');

			var href = $(this).find('> a').attr('href'),
				type = href.split('/');
			type = type[type.length-2];
			type = decodeURI(type);
			console.log(type);

			var state = {
				title: '',
				url: href,
				cat: type
			}

			history.pushState( state, state.title, state.url );
			show_ajax_preloader();
			$('.post-list').isotope('destroy');
			// $('.paging-navigation').hide();

			$.ajax({
				url: ajaxcontent.ajaxurl,
				type: 'post',
				data: {
					action: 'ajax_content',
					cat: type
				},
				success: function( result ) {
					// $('.post-list').html(result);
					$('#isotope_content_dummy').remove();
					$('#isotope_content').html('');
					$('<div id="isotope_content_dummy" style="display: none;"></div>').insertAfter('#isotope_content');
					$('#isotope_content_dummy').append(result);

					$('#isotope_content_dummy img').imagesLoaded(function(){
						$('#isotope_content').css({'display':'block'}).isotope({
							itemSelector: '.item',
							masonry:{
								columnWidth: 100
							}
						}).isotope('insert',$('#isotope_content_dummy .item'),init_nav);
					});

					remove_ajax_preloader();
					// $('.post-list').isotope({
					// 	itemSelector: '.item',
					// 	masonry: {
					// 		columnWidth: 100
					// 	}
					// });
					// $('.post-list').html(result);
				}
			});
		});

		window.onpopstate = function( e ) {

			if (history.state != null) {
				show_ajax_preloader();
				$('.post-list').isotope('destroy');
				// $('.paging-navigation').hide();
				$.ajax({
					url: ajaxcontent.ajaxurl,
					type: 'post',
					data: {
						action: 'ajax_content',
						cat: history.state.cat
					},
					success: function( result ) {
						$('#isotope_content_dummy').remove();
						$('#isotope_content').html('');
						$('<div id="isotope_content_dummy" style="display: none;"></div>').insertAfter('#isotope_content');
						$('#isotope_content_dummy').append(result);

						$('#isotope_content_dummy img').imagesLoaded(function(){
							$('#isotope_content').css({'display':'block'}).isotope({
								itemSelector: '.item',
								masonry:{
									columnWidth: 100
								}
							}).isotope('insert',$('#isotope_content_dummy .item'),init_nav);
						});

						remove_ajax_preloader();
						// $('.post-list').html(result);
					}
				});
			} else {
				window.location.reload();
			}
		}
	});

function init_nav(){
	// console.log($('.product-list').find('li').length);

	// if ($('.product-list').find('li').length > 9) {
	// 	var height = $($('.product-list').find('li')[9]).height();
	// 	$($('.product-list').find('li')[9]).remove();
	// 	$('.product-list').height($('.product-list').height() - height);
	// 	$('.paging-navigation').show().find('a').attr('href', document.location.href + 'page/2');
	// }
	// if (laboutiqueAjax.navigation_sticky){
	// 	$('.navigation.visible-desktop').trigger("sticky_kit:detach").stick_in_parent({
	// 		offset_top:0,
	// 		parent:'.wrapper'
	// 	});
	// }
}
function show_ajax_preloader(){
	remove_ajax_preloader();
	$('#content').prepend('<div class="ajax_loading_indicator"></div>');
}
function remove_ajax_preloader(){
	$('.ajax_loading_indicator').remove();
}

} )( jQuery );

