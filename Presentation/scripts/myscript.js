
//when page loads 
$(document).ready(function(){
	
	addSpanToName();
	
	//wraps each letter in the name paragraph in a <span> tag 
	//for individual animation 
	function addSpanToName()
	{
		name = $("#name").text();
		var nameWithEachLetterSpanned = "";	
		
		for(i=0;i<name.length;i++)
		{
			var spanOpen = "<span id = 'nameAnimate" + i + "'>"
			var spanClose = "</span>"
			nameWithEachLetterSpanned += spanOpen + name.charAt(i) + spanClose ;
		}
		
		document.getElementById("name").innerHTML = nameWithEachLetterSpanned;
		
		
	}
	
	//when button is clicked
    $("#test").click(function(){				
			
		for(i=0;i<name.length;i++)
		{
				//get the span names created in addSpanToName()
				var spanName = "#nameAnimate" + i;
				var currentSpan = $(spanName);
				//move them up and make them visible 
				if(i == name.length-1)
				{
					//show the divs after animating the last letter
					currentSpan.delay(100 * i).animate({
												top:"-100px",
												opacity: '1'
												},{
												complete: function () {
												$("div").animate({opacity:'1'});
												}
										});	
				}
				else
				{
					currentSpan.delay(100 * i).animate({top:"-100px",
														opacity: '1'});
				}
				
		}

    });
	

	
	//when the mouse hovers over a page
    $("div").hover(function(){
        $( this ).toggleClass("highlight");
    });
	
	
	
});//end onload