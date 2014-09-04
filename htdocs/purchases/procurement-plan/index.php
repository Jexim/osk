<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("План закупок");
$APPLICATION->SetPageProperty("title", "План закупок");
$APPLICATION->SetPageProperty("keywords", "План закупок");
$APPLICATION->SetPageProperty("description", "План закупок");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.procurement_plan_list", "main", array(), false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>