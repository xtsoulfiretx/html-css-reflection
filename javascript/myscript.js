window.addEventListener('load', function() {
  $(".sidebar").hide();
});

// Hambuger click effect //

  $(".hamburger").click(function(){
    $(".hamburger").toggleClass("is-active");
    $("#main").toggleClass("btn-pressed");
});

