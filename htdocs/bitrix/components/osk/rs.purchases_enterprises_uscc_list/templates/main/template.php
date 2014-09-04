<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<ul class="list">
    <? foreach ($arResult as $value): ?>     
        <li><a href="<?= $value['PROPERTY_LINK_PURCHASE_VALUE'] ?>"><?= $value['NAME'] ?></a></li>
    <? endforeach; ?>
</ul>