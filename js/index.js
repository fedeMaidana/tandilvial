$(document).ready(function(){
  var imgItems = $('.slider li').length;

  for (var i = 1; i < imgItems; i++) {
    $('.pagination').append('<li><span class="circle"></span></li>');
  }

  $('.slider li').hide();
  $('.slider li:first').show();
  $('.pagination li:first .circle').css({'background-color': '#F3CE15'});
  $('.left').on('click', function(){
  var z = $('.slider li');
  $('.pagination li .circle').css({'background-color': ''});
  var y = $('.pagination li .circle');
      $('.slider li').each(function(index, element){
        if ($(element).is(":visible")){
          $(element).hide()
          var i
          if(index == 0){
            i = z.length-1
          }else {
            i = index-1
          }
          $(z[i]).show()
          $(y[i]).css({'background-color': '#F3CE15'});
          return false
        }
      });
  })
  $('.right').on('click', function(){
  var z = $('.slider li');
    $('.pagination li .circle').css({'background-color': ''});
  var y = $('.pagination li .circle');
      $('.slider li').each(function(index, element){
        if ($(element).is(":visible")){
          $(element).hide()
          var i
          if(index == z.length-1){
            i = 0
          }else {
            i = index+1
          }
          $(z[i]).show()
          $(y[i]).css({'background-color': '#F3CE15'});
          return false
        }
      });
  })

});

$(document).ready(function(){

  $('.arrow').click(function(){

    $('body, html').animate({

      scrollTop: '0px'

    }, 300);

  });

  $(window).scroll(function(){

    if ( $(this).scrollTop() > 0 ){

      $('.arrow').slideDown(300);

    } else {

      $('.arrow').slideUp(300);

    }

  });

});
