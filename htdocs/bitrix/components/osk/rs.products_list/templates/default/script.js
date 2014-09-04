/** Список проектов **/

$(window).load(function(){
    
     //    меняем картинку товара на маску при наведении
    $('.products_block_one_yes').mouseenter(function (){
        
        var src = $(this).find('.img_small_item').attr('src');
        var pseudo_src = $(this).find('.img_small_item').data('id');
        
        $(this).find('.img_small_item').attr('src', pseudo_src);
        $(this).find('.img_small_item').data('id', src);
        $(this).find('.img_big_item').show();
        $(this).find('.products_one_link').find('a').css({'color': 'white', 'border-bottom': '1px solid'});
        $(this).find('span').css({'color': 'white', 'border-bottom': '1px solid'});
        
    });
    $('.products_block_one_yes').mouseleave(function (){
        var src = $(this).find('.img_small_item').attr('src');
        var pseudo_src = $(this).find('.img_small_item').data('id');
        
        $(this).find('.img_small_item').attr('src', pseudo_src);
        $(this).find('.img_small_item').data('id', src);
        $(this).find('.img_big_item').hide();
        $(this).find('.products_one_link').find('a').removeAttr('style');
        $(this).find('span').removeAttr('style');
    });
    
     //    меняем картинку товара на маску при наведении
    $('.products_block_one_non').mouseenter(function (){
        $(this).parents('.products_block_one').find('.products_one_link').find('a').addClass('text_color');
//        $(this).parents('.products_block_one').find('span').addClass('text_color');
        
    });
    $('.products_block_one_non').mouseleave(function (){
        $(this).parents('.products_block_one').find('.products_one_link').find('a').removeClass('text_color');
//        $(this).parents('.products_block_one').find('span').removeClass('text_color');
    });
    
    
    
    //    устанавливаем высоту блоков на странице товаров
    
    $.each($('.products_block_row'), function (){
        
        var curr_row = $(this);
        
        var curr_ico = [];
        var curr_link = [];
        
        $.each(curr_row.find('.products_block_one_ico'), function(){
            
            curr_ico.push($(this).height());
            
        });
        $.each(curr_row.find('.products_one_link'), function(){
            
            curr_link.push($(this).height());
            
        });
        
        $(this).find('.products_block_one_ico').height(Math.max.apply(0, curr_ico)+28);
        $(this).find('.products_block_one_ico').find('a').css({'position':'absolute'});
        
        $(this).find('.products_one_link').height(Math.max.apply(0, curr_link));
        
        
    });
    
    setInterval(function(){
        $('.products_block_one[data-id="hide"]:first').animate({'opacity':1}, 100).removeAttr('data-id');
    }, 100);
    
    $('.section_button').on('click', function(){
        if(!$(this).hasClass('selected')){
            if($(this).attr('section') != 'all'){
                $('.section').hide();
                $('.section_'+$(this).attr('section')).show();
                $('.section_button').removeClass('selected');
                $(this).addClass('selected');
            }else{
                $('.section').show();
                $('.section_button').removeClass('selected');
                $(this).addClass('selected');
            }
        }
    });
    
    
});