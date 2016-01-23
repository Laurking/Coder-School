$(function(){

	//prevent all default events

	$(".programming p").parent("a").click(function(e){
		e.preventDefault();
	})


	$(document).bind('click',function(e){
		if($("#programs-menu").is(e.target)){
			$("#page-nav").slideToggle();
		}
		else{
			$("#page-nav").hide();
		}

	})

	$(document).bind('click',function(e){
		if ($("#search").is(e.target)) {
			$(".search_box").slideToggle();
		}
	})

	

	


	var background="img/image1.jpg img/image2.jpg img/image5.jpg".split(" ");
	var counter=-1;
	var duration=4000;

	setInterval(function(){
		color=$(".social-networks img").css("background-color");
		counter+=1;
		if (counter>background.length-1){
			counter=0;
		}
		$("main .carousel").css("background-image","url("+background[counter]+")");
		$($("main .carousel article ul li")[counter]).addClass("carouself_item");
		$($("main .carousel article ul li")[counter]).siblings().removeClass("carouself_item");
	},duration)

	$(".programming article section a p").each(function(){
		var content=$(this).html();
		var contentList=$(this).html().split(" ").slice(0,30);
		var contentToDisplay="";
		var readMore="<span class=\"learnMore\">Learn more</span>";
		var showLess="<span class=\"showLess\">show less</span>";
		array=new Library(contentList);
		contentToDisplay=array.join(" ");
		$(this).html(contentToDisplay+" "+readMore);

		$(".programming article section").on('click',".learnMore",function(e){
			e.preventDefault();
			$(this).parent().html(content+" "+showLess);
			
		})
		$(".programming article section").on('click',".showLess",function(e){
			e.preventDefault();
			$(this).parent().html(contentToDisplay+" "+readMore);
		})

	})

	$("#menu_ic").click(function(){
		$("#mobile-nav").slideToggle();

	})

	$(window).resize(function(){
		var windowWidth=$(window).width();
		if (windowWidth>768) {$(".mobile-nav").hide();$("#desktop-nav").show();}
	})

	









	function Library(array){
		this.string="";
		this.array=array;
		this.join=function(pattern){
			for (var i = 0; i < this.array.length; i++) {
				this.string+=this.array[i]+pattern;
			}
			return this.string.substring(0,this.string.length-pattern.length);
		}

	}

















	

	// $(window).scroll(function() {
 //    	var height = $(window).scrollTop();
 //    	if(height>90){
 //        	$('header').css('position','absolute');

 //    	}
 //    	else{
 //    		$('header').css('position','static');
 //    	}
	// });
})