$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('.stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('.stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
	//var thiss = $(this).parent();
	//var abc = $(this).find(".selected").data('value');
	//alert(abc);
	//var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var ratingValue = parseInt($(this).parent().children('li.selected').last().data('value'), 10);
	
	var ratingTitle = $(this).parent().children('li.selected').last().attr('title');
	
	if(ratingTitle=='N/A')
	{
	$(this).parent().children('li.selected').last().addClass('colorbg');
	}
	else 
	{
	$(this).closest('.rating-stars').find('.na').removeClass('colorbg');
	}
	
	
	
	
    var msg = "";
    if (ratingValue > 1) {
        msg = you_rated+" " + ratingValue + " "+stars;
    }
    else {
        msg = improve_rating+" " + ratingValue + " "+stars;
    }
    //responseMessage(msg);
	if(ratingValue==6) { ratingValue = '0'; }
	
	$(this).closest('.rating-stars').find('.val').val(ratingValue);
	
	$(this).closest('.rating-stars').find('.success-box div.text-message').html(you_rated+": <span>" + ratingTitle + "</span>");
    
  });
  
  
});




$(document).on('click','.ratesbtnnot',function()
{
$(this).closest('.rating-stars').find('.star').removeClass('selected');
});