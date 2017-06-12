$(document).ready(function(){

  $('.dropdown a').on('click',function(){

    $(this).next('.dropdown-list').slideToggle();
  });
});
