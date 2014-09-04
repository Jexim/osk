/** Список проектов **/

$(window).load(function(){
    $("select[name=city]").change(function () {
        $('.switcher_item').removeClass('selected');
        $('.characteristics_all').addClass('selected');
        var city = $(this).val();
        if(city=='00'){
            $('.enterprises').show();
        } else {
            $('.enterprises').hide();
            $('.city_'+city).show();
        }
    });   
    $('.switcher_item').on('click', function(){
        $('select[name=city] option:first').attr('selected','1');
        $('.select_field_enterprises .custom-text').html('Все города');
        if(!$(this).hasClass('selected')){
            if($(this).attr('characteristics') != 'all'){
                $('.enterprises').hide();
                $('.characteristics_'+$(this).attr('characteristics')).show();
                $('.switcher_item').removeClass('selected');
                $(this).addClass('selected');
            }else{
                $('.enterprises').show();
                $('.switcher_item').removeClass('selected');
                $(this).addClass('selected');
            }
        }
    });
});