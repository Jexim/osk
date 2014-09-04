<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



<div class="one_item_wrapper product_item">
    <div class="incut incut_product_top">
        <div class="<? if($arResult['ELEMENT']['PROP']['NAME_UPPER_PICTURE']['VALUE']): ?>item_one_title<? else: ?>item_one_title_min<? endif; ?>">
            <? if($arResult['SECTION'][$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID'] == 6): ?>
                <a href="/products/civil/"><?= $arResult['SECTION'][$arResult['SECTION'][$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['NAME'] ?></a>
                <span>/</span>
            <a href="/products/civil/?section=<?=$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']?>"><?=$arResult['SECTION'][$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']]['NAME']?></a>
            <? else: ?>
                <a href="/products/"><?= $arResult['SECTION'][$arResult['SECTION'][$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['NAME'] ?></a>
                <span>/</span>
            <a href="/products/?section=<?=$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']?>"><?=$arResult['SECTION'][$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']]['NAME']?></a>
            <? endif; ?>

            <h1><?= $arResult['ELEMENT']['ITEM']['NAME'] ?></h1>
            <? if(!empty($arResult['ELEMENT']['PROP']['SHORT_TEXT']['VALUE'])): ?>
                <p><?= $arResult['ELEMENT']['PROP']['SHORT_TEXT']['VALUE'] ?></p>
            <? endif; ?>
            <? if($arResult['NEWS'] || $arResult['PRESS_RELEASES'] || $arResult['PURCHASES_USC']): ?>
                <div class="item_one_submenu">
                    <b>Описание</b>
                    <? if($arResult['NEWS']): ?><a href="/press-center/news/products/<?= $arResult['ELEMENT']['ITEM']['ID'] ?>/">Новости</a><? endif; ?>        
                    <? if($arResult['PRESS_RELEASES']): ?><a href="/press-center/press-releases/products/<?= $arResult['ELEMENT']['ITEM']['ID'] ?>/">Пресс-релизы</a><? endif; ?>
                    <? if($arResult['PURCHASES_USC']): ?><a href="/purchases/purchases-enterprises-usc/products/<?= $arResult['ELEMENT']['ITEM']['ID'] ?>/">Документы</a><? endif; ?>
                </div>
            <? endif; ?>
        </div>
        <? if(!empty($arResult['ELEMENT']['PROP']['TOP_IMAGES']['VALUE'])): ?>
            <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['TOP_IMAGES']['VALUE']) ?>" />
        <? endif; ?>
    </div>
    
    <div class="block clear block_product_description">
        <? if(!empty($arResult['ELEMENT']['ITEM']['DETAIL_TEXT'])): ?>
            <?= $arResult['ELEMENT']['ITEM']['DETAIL_TEXT'] ?>
        <? endif; ?>

        <? if(!empty($arResult['ELEMENT']['PROP']['DEVELOPER']['VALUE']) || !empty($arResult['ELEMENT']['PROP']['BUILDER']['VALUE'])): ?>
            <div class="item_one_developer">
                <? if(!empty($arResult['ELEMENT']['PROP']['DEVELOPER']['VALUE'])): ?>
                    <div class="item_one_developer_in">
                        <span>Разработчик</span><br/>
                        <? foreach ($arResult['ELEMENT']['PROP']['DEVELOPER']['VALUE'] as $value): ?>
                            <a href="<?= $arResult['COMPANIES'][$value]['DETAIL_PAGE_URL'] ?>"><?= $arResult['COMPANIES'][$value]['NAME'] ?></a>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
                <? if(!empty($arResult['ELEMENT']['PROP']['BUILDER']['VALUE'])): ?>
                    <div class="item_one_developer_in">
                        <span>Строитель</span><br/>
                        <? foreach ($arResult['ELEMENT']['PROP']['BUILDER']['VALUE'] as $value): ?>
                            <a href="<?= $arResult['COMPANIES'][$value]['DETAIL_PAGE_URL'] ?>"><?= $arResult['COMPANIES'][$value]['NAME'] ?></a>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
            </div>
        <? endif; ?>
    </div>
    
    <? if(!empty($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'])): ?>
        <? if(count($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'])==2): ?>
            <div class="incut_tween incut_product_middle">
                <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'][0]) ?>" />
                <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'][1]) ?>" />
                <div class="clear_both"></div>
            </div>
        <? else: ?>
            <? for($i=0; $i<count($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE']); $i++): ?>
                <? if($i % 3 == 0 || $i==0): ?>
                    <div class="incut incut_product_middle">
                        <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'][$i]) ?>" />
                    </div>
                <? else: ?>
                    <div class="incut_tween">
                        <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'][$i]) ?>" />
                        <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['MIDDLE_IMAGES']['VALUE'][++$i]) ?>" />
                        <div class="clear_both"></div>
                    </div>
                <? endif; ?>
            <? endfor; ?>
        <? endif; ?>
    <? endif; ?>
    
    <? if(!empty($arResult['ELEMENT']['PROP']['TACTICAL_CHARACTERISTICS_TABLE']['VALUE'])): ?>
        <!--<div class="item_one_specifications">-->
        <div class="block clear block_characteristics">
            <h3>Технические характеристики</h3>
            <!--<div class="item_one_specifications_table">-->
                <?= $arResult['ELEMENT']['PROP']['TACTICAL_CHARACTERISTICS_TABLE']['~VALUE']['TEXT'] ?>  
            <!--</div>-->
        </div>
        <!--</div>-->
    <? endif; ?>
    
    <? if(!empty($arResult['ELEMENT']['PROP']['BLACK_BLOCK_TEXT']['VALUE'])): ?>
        <div class="important important_product">
            <p><?= $arResult['ELEMENT']['PROP']['BLACK_BLOCK_TEXT']['~VALUE']['TEXT'] ?></p>
        </div>
    <? endif; ?>
    
    <? if(!empty($arResult['ELEMENT']['PROP']['ARMAMENT_TABLE']['VALUE'])): ?>
    <!--<div class="item_one_specifications">-->
        <div class="block clear block_characteristics">
            <h3>Вооружение</h3>
            <!--<div class="item_one_specifications_table">-->
                <?= $arResult['ELEMENT']['PROP']['ARMAMENT_TABLE']['~VALUE']['TEXT'] ?>
            <!--</div>-->
        </div>
    <!--</div>-->
    <? endif; ?>
    
    <? if(!empty($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'])): ?>
        <? if(count($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'])==2): ?>
            <div class="incut_tween">
                <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'][0]) ?>" />
                <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'][1]) ?>" />
                <div class="clear_both"></div>
            </div>
        <? else: ?>
            <? for($i=0; $i<count($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE']); $i++): ?>
                <? if($i % 3 == 0 || $i==0): ?>
                    <div class="incut">
                        <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'][$i]) ?>" />
                    </div>
                <? else: ?>
                    <div class="incut_tween">
                        <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'][$i]) ?>" />
                        <img src="<?= CFile::GetPath($arResult['ELEMENT']['PROP']['BOTTOM_IMAGES']['VALUE'][++$i]) ?>" />
                        <div class="clear_both"></div>
                    </div>
                <? endif; ?>
            <? endfor; ?>
        <? endif; ?>
    <? endif; ?>
</div>

