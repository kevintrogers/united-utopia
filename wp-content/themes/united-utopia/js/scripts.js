$(function() {

  var index = 1,
  fade_index = 1,
  slide = $("#slide-" + index),
  exit_slide = $("#slide-" + fade_index);

  showSlide();

  function showSlide() {

    exit_slide.removeClass('active');
    //show active slide
    exit_slide.addClass('fade');
    slide.addClass('active');
    
    slide.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function (e) {
            exit_slide.removeClass('fade');

        });
 
  }

  $('#lft-btn').click(function() {
    index--;

    if (index == 1) {
      fade_index = 3;
    }
    else if (index == 0) {
      index = 3;
      fade_index = 1;
    } else {
      fade_index = index + 1;
    }

    showSlide();
  });

  $('#rt-btn').click(function() {
    index++;
    if (index === 4) {
      index = 1;
      fade_index = 3;
    } else {
      fade_index = index - 1;
    }

    showSlide();
  });

});
//toggle between slides
//automatically toggle