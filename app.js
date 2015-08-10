$(document).ready(function(){
    //Adds in a fade affect on page load
    $('body').hide().delay(5000).fadeIn('slow');
    //this event states that on click of entry-title then it will slidedown and display entry-content and toggle these events
    $(".entry").on("click", function(){
      $(this).children(".entry-content").slideToggle().toggleClass("active-entry");
    });

});