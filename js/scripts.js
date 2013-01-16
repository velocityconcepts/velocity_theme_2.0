/*-----------------------------------------------------------------------------------*/
/*	Spastic Nav | Lava Lamp type nav
/*-----------------------------------------------------------------------------------*/
$(document).ready(function() {
	$('#nav').spasticNav();
});
/*-----------------------------------------------------------------------------------*/
/*	TOGGLE
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
//Hide the tooglebox when page load
$(".togglebox").hide();
//slide up and down when click over heading 2
$("h3").click(function(){
// slide toggle effect set to slow you can set it to fast too.
$(this).toggleClass("active").next(".togglebox").slideToggle("slow");
return true;
});
});

/*-----------------------------------------------------------------------------------*/
/*	TABS
/*-----------------------------------------------------------------------------------*/
$(document).ready(function() {
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});

/*-----------------------------------------------------------------------------------*/
/*	GRID BOXES
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
	
      var 
        speed = 1000,   // animation speed
        $wall = $('#bottom-container .boxes'),

        masonryOptions = {         // initial masonry options

          itemSelector: '.box:not(.invis)',
          animate: true,
          animationOptions: {
            duration: speed,
            queue: false
          }
        };
		
		$wall.imagesLoaded(function(){
			
			$wall.masonry(masonryOptions);
			

		//	imageFadeIn($(".box"));
		$wall.animate({opacity: 1},1000);
		
			
		});
		
		
});
$.fn.imagesLoaded = function(a) {
	var 
	b=this.find("img"),
	c=[],
	d=this,
	e=b.length;
	
	if(!b.length){
		a.call(this);
		return this
	}
	b.one("load error",function(){
		--e===0&&(e=b.length,b.one("load error",function(){
			--e===0&&a.call(d)}).each(function(){
				this.src=c.shift()
			})
		)}
	).each(function(){
		c.push(this.src),this.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
	});
	return this
};
  
/*-----------------------------------------------------------------------------------*/
/*	PORTFOLIO IMAGE HOVER
/*-----------------------------------------------------------------------------------*/
 $(document).ready(function() {
        $('.box').mouseenter(function(e) {

            $(this).children('a').not('.active').children('span').fadeIn(200);
        }).mouseleave(function(e) {

            $(this).children('a').not('.active').children('span').fadeOut(200);
        });
    });
	

    
    
/*-----------------------------------------------------------------------------------*/
/*	PRETTY PHOTO
/*-----------------------------------------------------------------------------------*/
 
$(document).ready(function(){
	$("a[rel^='prettyPhoto']").prettyPhoto({autoplay_slideshow: false, overlay_gallery: false, social_tools:false, deeplinking: false, theme:'pp_default', slideshow:5000});
});



