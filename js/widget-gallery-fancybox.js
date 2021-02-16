( function( $ ) {



		$('.widget_media_gallery').ready(function (){
			var gallery = $('.widget_media_gallery');
			var id = gallery.attr('id');
			gallery.find('a').attr('data-fancybox', id);
			gallery.find('img').each(function (img){
				var w = $(this).attr('width');
				var h = $(this).attr('height');
				var src = $(this).attr('src');
				var fullSrc = src.replace("-"+w+"x"+h, "")
				$(this).parent('a').attr('href', fullSrc)
			});

		});
}( jQuery ) );
