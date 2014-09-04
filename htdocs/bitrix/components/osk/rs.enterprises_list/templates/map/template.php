<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="block second">
    <div class="enterprises_search_block">

        <div class="sub_filter sub_filter_enterprises">
            <div class="item"><span class="item_category">Специализация:</span></div>
            <div class="item switcher_item for_jn_view selected characteristics_all" characteristics="all"><span class="pseudo">Все</span></div>
            <? foreach ($arResult['ARR_CHARACTERISTICS'] as $value): ?>
                <div class="item switcher_item for_fb_view" characteristics="<?= $value['ID'] ?>" ><span class="pseudo"><?= $value['NAME'] ?></span></div>
            <? endforeach; ?>
        </div>

        <!-- <div class="list_search_block"> -->

        <!-- </div> -->

        <div class="search_field_enterprises">
            <div class="form_validate field" data-id="field">
                <form>
                    <input type="text" data-xp="required: true" name="SEARCH_TEXT" placeholder="Поиск по сайту" value="" /><button data-xp="enabled_on_completed: true" class="small">Найти</button>
                </form>
            </div>
        </div>
        <div class="select_field_enterprises">
            <select class="pretty_select" name="city">           
                <option value="00">Все города</option>
                <? foreach ($arResult['ARR_CITY'] as $key => $value): ?>
                    <option value="<?= $key ?>" <? if ($key == $_REQUEST['city']): ?><? endif; ?>><?= $value['NAME'] ?></option>
                <? endforeach; ?>     
            </select>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="map"></div>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap;

    function init(){     
        myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 7
        });
    }
</script>