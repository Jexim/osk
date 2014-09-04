<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

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
                <input type="text" data-xp="required: true" name="SEARCH_TEXT" placeholder="Поиск по сайту" value="Б" /><button data-xp="enabled_on_completed: true" class="small">Найти</button>
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

<div class="switch_enterprises">
    <div class="switch_enterprises__name">
        <div class="switch_block switch_block_current_down">
            <span class="gray-link">Название</span>
        </div>
    </div>
    <div class="switch_enterprises__city">
        <div class="switch_block">
            <span class="gray-link">Город</span>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="list_enterprises list_by_name">
    <div class="clear"></div>
    <? foreach ($arResult['ITEM'] as $value): ?>
        <div class="item enterprises city_<?= $value['PROPERTY_CITY_VALUE'] ?> characteristics_<?= $value['PROPERTY_CHARACTERISTICS_VALUE'] ?>">
            <div class="item__name">
                <div class="title">
                    <a href="<?= $value["DETAIL_PAGE_URL"] ?>"><?= $value['NAME'] ?></a>
                </div>
                <div class="category">
                    <span><?= $arResult['CHARACTRISTICS'][$value["PROPERTY_CHARACTERISTICS_VALUE"]]['NAME'] ?></span>
                </div>
            </div>
            <div class="item__city">
                <span class="gray-link"><?= $arResult['CITY'][$value["PROPERTY_CITY_VALUE"]]['NAME'] ?></span>
            </div>
        </div>
    <? endforeach; ?>
</div>
<div class="list_by_city">
    <div class="list_enterprises list_by_city_desk">
        <div class="clear"></div>
        <? foreach ($arResult['ITEM_BY_CITY_DESK'] as $city): ?>
            <? foreach ($city as $value): ?>
                <div class="item enterprises city_<?= $value['PROPERTY_CITY_VALUE'] ?> characteristics_<?= $value['PROPERTY_CHARACTERISTICS_VALUE'] ?>">
                    <div class="item__name">
                        <div class="title">
                            <a href="<?= $value["DETAIL_PAGE_URL"] ?>"><?= $value['NAME'] ?></a>
                        </div>
                        <div class="category">
                            <span><?= $arResult['CHARACTRISTICS'][$value["PROPERTY_CHARACTERISTICS_VALUE"]]['NAME'] ?></span>
                        </div>
                    </div>
                    <div class="item__city">
                        <span class="gray-link"><?= $arResult['CITY'][$value["PROPERTY_CITY_VALUE"]]['NAME'] ?></span>
                    </div>
                </div>
            <? endforeach; ?>
        <? endforeach; ?>
    </div>
    <div class="list_enterprises list_by_city_asc">
        <div class="clear"></div>
        <? foreach ($arResult['ITEM_BY_CITY_ASC'] as $city): ?>
            <? foreach ($city as $value): ?>
                <div class="item enterprises city_<?= $value['PROPERTY_CITY_VALUE'] ?> characteristics_<?= $value['PROPERTY_CHARACTERISTICS_VALUE'] ?>">
                    <div class="item__name">
                        <div class="title">
                            <a href="<?= $value["DETAIL_PAGE_URL"] ?>"><?= $value['NAME'] ?></a>
                        </div>
                        <div class="category">
                            <span><?= $arResult['CHARACTRISTICS'][$value["PROPERTY_CHARACTERISTICS_VALUE"]]['NAME'] ?></span>
                        </div>
                    </div>
                    <div class="item__city">
                        <span class="gray-link"><?= $arResult['CITY'][$value["PROPERTY_CITY_VALUE"]]['NAME'] ?></span>
                    </div>
                </div>
            <? endforeach; ?>
        <? endforeach; ?>
    </div>
</div>