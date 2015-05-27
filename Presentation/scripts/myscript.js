
//when page loads 
$(document).ready(function(){
	
	addSpanToName();
	animateWebpageTitle();
	
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
	


    //     $("p").click(function(){
    //     $(this).hide();
    // });

	
	//when the mouse hovers over a page
    // $(".noHilight").hover(function(){
    //     // if($( this ).attr('class') == "noHilight")
    //     // {
    //         //change css to show highlighted div
    //         $( this ).toggleClass("highlight");
    //         //get the page id selected
    //         var selectedPageId = $( this ).attr('id');
    //         //display articles assocaited with that page
    //         var selectedArticles = '.articleOnPage' + selectedPageId.slice(-1);
    //         $('#test').html(selectedArticles);
            
    //       //  $('#atPage5').css('display','inline');
            
    //         $(selectedArticles).fadeToggle(300);
    //       // $(selectedArticles).children("span").toggle();

    // });
	
	
	//when the mouse hovers over a page
    $(".noHilight").click(function(){
        //change css to show highlighted div
        $( this ).toggleClass("highlight");
        //get the page id selected
        var selectedPageId = $( this ).attr('id');
        //display articles assocaited with that page
        var selectedArticles = '.articleOnPage' + selectedPageId.slice(-1);
        $('#test').html(selectedArticles);
        
      //  $('#atPage5').css('display','inline');
        
        $(selectedArticles).fadeToggle(300);
       // $(selectedArticles).children("span").toggle();
        
    });	
	
});//end onload