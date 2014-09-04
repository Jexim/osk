$(function() {
    //слайдер
    $(".slider-control").find("a").click(function(){
       return false;
    });

  /* ALS Switcher Action */
  $(function(){
    var switcher = $('.als-switcher');
    if (switcher.length > 0){
      switcher.each(function(){
        new als.Switcher($(this).find('.switcher_item'), $(this).find('.switcher_view'));
      })
    }
  });


  /**
   * Валидация форм
   */
  $('.form_validate').each(function(){
    var uncompleted = $(this).find('.uncompleted');

    expromptum();

    if (uncompleted.length > 0){

      expromptum('.form_validate.'+$(this).data('id')+' form').first().change(function(){
        var html = '';

        this._param('required')
          .append(this._param('invalid'))
          .each(function(){
            if (this.$label)
              html += (html ? ', ': '') + '<b>' + this.$label.text() + '</b>';
          });

        uncompleted.html((html ? 'Заполните поля: ' : '') + html);
      });

    }

  });

  /**
   * Селекты
   */
  $('.pretty_select').each(function(){
    $(this).selectik();
  });

  /**
   * Галерея
   */
  if ($(".fancybox").length > 0){
    $(".fancybox").fancybox({
      openEffect	: 'none',
      closeEffect	: 'none'
    });
  }

  if ($('.fancybox_youtube').length > 0){
    $('.fancybox_youtube').fancybox({
      maxWidth	: 800,
      maxHeight	: 600,
      fitToView	: false,
      width		: '70%',
      height		: '70%',
      autoSize	: false,
      closeClick	: false,
      openEffect	: 'none',
      closeEffect	: 'none'
    });
  }

  /**
   * Раскрывающийся контент
   */
  $('.foldable').find('.foldable_control').on('click', function(){
      $(this).toggleClass('open');
      var el = $(this).closest('.foldable').find('.foldable_content');
      if(el.is(':hidden')){
        el.slideDown(200);
      } else {
        el.slideUp(200);
      }
  });


    $('.isotope').isotope({
      itemSelector: '.item',
      masonry: {
        columnWidth: 230
      }
    });






});

