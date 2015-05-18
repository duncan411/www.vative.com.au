jQuery(document).ready(function($){

	(function(){	
		var sideBar = $(".sidebar");
		if (sideBar.length == 0){
			return;
		}

		var content = $('.wrap > .content > .col-md-8 .main');
		var sidebarHeight = sideBar.height() + 120;

		if (sidebarHeight > content.height()){
			content.css('height', sidebarHeight + 'px');
		}
	})();


// 	(function(){
// 		if (typeof revapi2 === 'undefined'){
// 			return;
// 		}
	 	
// 	 	revapi2.bind("revolution.slide.onloaded",function (e,data) {
		 
// 			revapi2.bind("revolution.slide.onchange",function (e,data) {
// 				var iframes = $('.rev_slider > ul > li iframe');

// 				$('.rev_slider > ul > li iframe').each(function(index, el){
// 					var $el = $(el);
// 					$el.attr('src', $el.attr('src'));
// 				});
// 			});
// 		});
// 	})();

// });