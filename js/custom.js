
$('.mob-button').click(function(){
  $('.my-mob-overlay').css("display", "flex");
  $('.my-mob-overlay').fadeIn()
  console.log('hello');
  
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



$(document).ready(function () {
  const $elements = $(".text-section, .page-template-contact, .gallery-container .wp-block-image  ").css({
    opacity: 0,
    transform: "translateY(10px)",
  });

  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          $(entry.target).css({
            opacity: 1,
            transform: "translateY(0)",
            transition: "opacity 1s ease-out, transform 0.6s ease-out",
          });
        }
      });
    },
    { threshold: 0.2 }
  );

  $elements.each(function () {
    observer.observe(this);
  });
});

