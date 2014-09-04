<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Закупки предприятий ОСК");
$APPLICATION->SetPageProperty("title", "Закупки предприятий ОСК");
$APPLICATION->SetPageProperty("keywords", "Закупки предприятий ОСК");
$APPLICATION->SetPageProperty("description", "Закупки предприятий ОСК");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.purchases_enterprises_uscc_list", "main", array(), false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>