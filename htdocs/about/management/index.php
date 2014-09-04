<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Менеджмент ОАО «ОСК»");
$APPLICATION->SetPageProperty("title", "Менеджмент ОАО «ОСК»");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", "");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.employees_list", "main", array("SECTION_ID"=>18), false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>