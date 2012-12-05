/*
    Confirms that user has entered a valid task
*/

$(document).ready(function(){
  
  //checks to make sure that required inputs are filled
  
  $("#taskname").keyup(function(){
    if(!$(this).val()) 
    {
        $(this).css({"background-color" : "#FF9966"});
    }
    else
    {
        $(this).css({"background-color" : "#99FF66"});
    }
  });

  $("#sdescrip").keyup(function(){
    if(!$(this).val()) 
    {
        $(this).css({"background-color" : "#FF9966"});
    }
    else
    {
        $(this).css({"background-color" : "#99FF66"});
    }
  });
  
    $("#ldescrip").keyup(function(){
        $(this).css({"background-color" : "#99FF66"});
  });
  
  $("#time").keyup(function(){
    if(!$(this).val()) 
    {
        $(this).css({"background-color" : "#FF9966"});
    }
    else
    {
        $(this).css({"background-color" : "#99FF66"});
    }
  });
});
