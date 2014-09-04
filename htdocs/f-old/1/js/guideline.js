$(window).load(function(){
    
     //    меняем картинку товара на маску при наведении
    $('.products_block_one_yes').mouseenter(function (){
        
        var src = $(this).parents('.products_block_one').find('.img_small_item').attr('src');
        var pseudo_src = $(this).parents('.products_block_one').find('.img_small_item').data('id');
        
        $(this).parents('.products_block_one').find('.img_small_item').attr('src', pseudo_src);
        $(this).parents('.products_block_one').find('.img_small_item').data('id', src);
        $(this).parents('.products_block_one').find('.img_big_item').show();
        $(this).parents('.products_block_one').find('a').css({'color': 'white', 'border-bottom': '1px solid'});
        $(this).parents('.products_block_one').find('p').css({'color': 'white', 'border-bottom': '1px solid'});
        
    });
    $('.products_block_one_yes').mouseleave(function (){
        var src = $(this).parents('.products_block_one').find('.img_small_item').attr('src');
        var pseudo_src = $(this).parents('.products_block_one').find('.img_small_item').data('id');
        
        $(this).parents('.products_block_one').find('.img_small_item').attr('src', pseudo_src);
        $(this).parents('.products_block_one').find('.img_small_item').data('id', src);
        $(this).parents('.products_block_one').find('.img_big_item').hide();
        $(this).parents('.products_block_one').find('a').removeAttr('style');
        $(this).parents('.products_block_one').find('p').removeAttr('style');
    });
    
     //    меняем картинку товара на маску при наведении
    $('.products_block_one_non').mouseenter(function (){
        $(this).parents('.products_block_one').find('a').css({'color': '#2b6dab', 'border-bottom': '1px solid'});
        $(this).parents('.products_block_one').find('p').css({'color': '#2b6dab', 'border-bottom': '1px solid'});
        
    });
    $('.products_block_one_non').mouseleave(function (){
        $(this).parents('.products_block_one').find('a').removeAttr('style');
        $(this).parents('.products_block_one').find('p').removeAttr('style');
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
//        $(this).find('.products_block_one_ico').find('img').css({'position':'absolute'});
        
        $(this).find('.products_one_link').height(Math.max.apply(0, curr_link));
        
            
        
    });
    
    setInterval(function(){
        $('.products_block_one[data-id="hide"]:first').animate({'opacity':1}, 100).removeAttr('data-id');
    }, 100);
    
    
    
    
});