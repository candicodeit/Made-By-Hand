$(document).ready(function(){
	// Add credits link to the paragraph
	$('.credits').appendTo('.film-container .film-desc p').css("marginLeft","5px");
	
	// Pagination placement outside of the <ol>
	$('.shoppe').append($('.pagination'));
	
	// Replace the <strong> created automatically by EE and/or wrap w/<li>
	$('.pagination strong').replaceWith('<li><span class="current">'+ $('.pagination strong').text() + '</span></li>');
	$('.pagination a').wrap('<li/>');
	
	// Customize pagination next '>' with '>>' and prev '<' with '<<'
	var lis = $('.pagination li a');
	lis.each(function(index) {
	    $(this).html($(this).html().replace("&gt;","&raquo;"));
	    $(this).html($(this).html().replace("&lt;","&laquo;"));
	});

});