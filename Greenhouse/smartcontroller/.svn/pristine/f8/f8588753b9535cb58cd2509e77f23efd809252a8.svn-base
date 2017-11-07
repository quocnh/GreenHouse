// if get javascript file form a php file, just follow 
// http://stackoverflow.com/questions/27579480/how-to-send-data-onclick-to-another-php-for-processing-using-post-or-get
// to transfer data from javascript file to php file.

$(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});

$("#btnGo").click(function(){
	window.location = "?houseId=" + $('.btn-select').text();
});