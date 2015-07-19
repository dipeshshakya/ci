$(document).ready(function(){
    $("#search").click(function(){
        $("#mysearch").load("search.php");
		$('#mysearch').toggle();
	
    });
    
    
    $(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});
});