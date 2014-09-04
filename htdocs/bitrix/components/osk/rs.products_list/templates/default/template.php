<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="products_wrapper">
    <h1 class="products_wrapper_title">
        <?if($arResult['TYPE'] == 'military'){?>
            <b>Военная</b> и <a class="civilian" data-id="hide" href="/products/civil/">гражданская</a> продукция
        <?}else{?>
            <a href="/products/">Военная</a> и <b>гражданская</b> продукция
        <?}?>
    </h1>
    <div class="sub_menu sub_menu-products sub_menu-products_<?if($arResult['TYPE'] == 'military'){?>military<?}else{?>civil<?}?>" data-id="hide">
        <div class="item selected section_button" section="all"><a>Все проекты</a></div>
        <? foreach ($arResult['SECTION'] as $value): ?>       
            <div class="item section_button" section="<?= $value['ID'] ?>"><a><?= $value['NAME'] ?></a></div>
        <? endforeach; ?>        
    </div>
</div>

<? foreach ($arResult['ITEM'] as $key => $arSection): ?>
    <div class="block clear section section_<?= $key ?>">
        <p class="lead_2 <?if($arResult['TYPE'] == 'military'){?>military<?}?>" data-id="hide"><?= $arResult['SECTION'][$key]['NAME'] ?></p>
    </div>

    <div class="products_block section section_<?= $key ?>">
        <div class="products_block_row">
            <? $i = 1; ?>
            <? foreach ($arSection as $value): ?>       
                <div class="products_block_one <?if($arResult['TYPE'] == 'military'){?>civilian<?}?> <? if(!empty($value['PREVIEW_PICTURE'])){?>products_block_one_yes<?}?>" data-id="hide">
                    <? if(!empty($value['PREVIEW_PICTURE'])): ?>
                        <? $pach = CFile::ResizeImageGet($value['PREVIEW_PICTURE'], array('width'=>294, 'height'=>294), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);   ?>
                        <div class="img_big_item">
                            <img src="<?= $pach['src'] ?>" class="img_big_item">
                        </div>
                    <? endif; ?>
                    <div class="products_block_one_ico">
                        <a title="<?= $value['NAME'] ?>" href="<?= $value['DETAIL_PAGE_URL'] ?>" class="<? if(empty($value['PREVIEW_PICTURE'])){?>products_block_one_non<?}?>">
                            <img class="img_small_item_mask" src="<?= CFile::GetPath($value['PROPERTY_SCHEME_TRANSPARENCY_VALUE']) ?>">
                            <img data-id="<?= CFile::GetPath($value['PROPERTY_SCHEME_TRANSPARENCY_VALUE']) ?>" class="img_small_item" src="<?= CFile::GetPath($value['PROPERTY_SCHEME_VALUE']) ?>">
                        </a>
                    </div>
                    <div class="products_one_link">
                        <a title="<?= $value['NAME'] ?>" href="<?= $value['DETAIL_PAGE_URL'] ?>" class="<? if(empty($value['PREVIEW_PICTURE'])){?>products_block_one_non<?}?>">
                            <?= $value['NAME'] ?>
                        </a>
                        <?if($arResult['TYPE'] == 'military'){?>
                            <span>
                                <?= $value['PROPERTY_SHORT_TEXT_VALUE'] ?>
                            </span>
                        <?}?>
                    </div>
                </div>
                <? if ($i % 3 == 0): ?>
                    <div class="clear_both"></div>
                </div>
                <div class="products_block_row">
                <? endif; ?>
                <? $i++ ?>
            <? endforeach; ?>    
            <div class="clear_both"></div>
        </div>    
        <div class="clear_both"></div>
    </div>
<? endforeach; ?>     