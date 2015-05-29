
//when page loads 
$(document).ready(function(){
	
	addSpanToName();
	animateWebpageTitle();
	positionFooter();
	
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
			nameWithEachLetterSpanned += spanOpen + name.charAt(i) + spanClose;
		}
		
		document.getElementById("name").innerHTML = nameWithEachLetterSpanned;
		
		
	}
	
	//makes letters in webpage title appear one by one
	function animateWebpageTitle()
	{
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
	}
	




	
//	when the mouse hovers over a page
    $(".noHilight").hover(function(){

         //   Only show hover effect if page is not selected
         if( $( this ).attr('class') == 'noHilight' || $( this ).attr('class') == 'noHilight lowHighlight' )
         {
                $( this ).toggleClass('lowHighlight');
         }

    });
	
	
	        $("#test").click(function(){
        	    var bottomOfWindow = $(window).height();
	   // alert(bottomOfWindow);
	   positionFooter();
    });
	
	//when the mouse clicks a page
    $(".noHilight").click(function(){
        
        //remove any articles besides the one clicked
        $('[class^="articleOnPage"]').hide();
        $('[class^="noHilight"]').attr('class', "noHilight");
        
        //change css to show highlighted div
        $( this ).attr('class', "noHilight highlight");
        //get the page id selected
        var selectedPageId = $( this ).attr('id');
        //display articles assocaited with that page
        var selectedArticles = '.articleOnPage' + selectedPageId.slice(-1);
        $('#test').html(selectedArticles);
        
      //  $('#atPage5').css('display','inline');
        
        $(selectedArticles).fadeToggle(300);
       // $(selectedArticles).children("span").toggle();
        
        
    });	
	
	function positionFooter()
	{
//var bottomOfWindow = $(window).height();
        
        //var footerPosition =  bottomOfWindow - $('footer').height();
        
       // $('footer').animate({ bottom: '50px' });
	}
	
	
});//end onload