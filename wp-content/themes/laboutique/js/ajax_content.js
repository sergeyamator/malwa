(function($) {
	$(document).ready(function() {

		$('.menu-item').on('click', function(event){
			var href = $(this).find('> a').attr('href').split('/');
			href = href[href.length-2];
			href = decodeURI(href);

			// console.log(href);

			// $.ajax({
			// 	url: ajaxcontent.ajaxurl,
			// 	type: 'post',
			// 	data: {
			// 		action: 'ajax_content',
			// 		cat: href
			// 	},
			// 	success: function( result ) {
			// 		$('.post-list').html(result);
			// 	}
			// });
		});

	});
})(jQuery);