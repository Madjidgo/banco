$(document).ready(function(){
  $(".card").hover(function(){
    $(this).css("background-color", "red");

  },function(){
    $(this).css("background-color","#fff");
  });
});
