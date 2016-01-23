$(function(){

	$(".list section,#more-videos section").click(function(){
		var source=$(this).children("video").children("source").attr('src');
		$("#player").attr("src",source);
		$("#player").load();

	})
})