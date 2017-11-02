$(document).ready(function(){

	/*var array = [0,6,11,12,13,14,15,16,17];
	$('.services_list li').each(function(){
		var indexEl= $(this).index();
		if ($.inArray(indexEl, array)!=-1) {
			$(this).addClass('services_list_padding');
		};
	})
*/
	var array = [0,5,16];
	$('.services_list_geo li').each(function(){
		var indexEl= $(this).index();
		if ($.inArray(indexEl, array)!=-1) {
			$(this).addClass('services_list_padding');
		};
	})

	var array = [7,10,11,12,13,14,15];
	$('.services_list_geo li').each(function(){
		var indexEl= $(this).index();
		if ($.inArray(indexEl, array)!=-1) {
			$(this).addClass('services_list_padding_more');
		};
	})

	/* ###### For SlideToggle Elements  ######*/
	var hideToggle = function(targetClick,toggleEl) {
		$(targetClick).click(function(event){
				event.stopPropagation();
				$(toggleEl).slideToggle("fast");
		});
		$(toggleEl).on("click", function (event) {
			event.stopPropagation();
		});
		$(document).on("click", function () {
				$(toggleEl).hide();
		});
	}

	if ($('body').width()  < 1024) {
		hideToggle('.top-nav','.nav-main-wrap');
	}
})