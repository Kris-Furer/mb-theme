
$('.mob-button').click(function(){
  $('.my-mob-overlay').css("display", "flex");
  $('.my-mob-overlay').fadeIn()
  console.log("hello");
})

$('#closeMob').click(function(){

  $('.my-mob-overlay').fadeOut()
    console.log("yooooo");
    $('.my-mob-overlay').css("display", "none");
});

$('.my-mob-overlay').click(function(){
  $('.my-mob-overlay').fadeOut()
    $('.my-mob-overlay').css("display", "none");
});
