$(document).ready(function(){
  $('body').hide().delay(500).fadeIn('slow');
  //this event states that on click of entry-title then it will slidedown and display entry-content and toggle these events
    $(".entry").on("click", function(){
      $(this).children(".entry-content").slideToggle().toggleClass("active-entry");
    });
});