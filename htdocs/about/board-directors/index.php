<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Совет директоров ОАО «ОСК»");
$APPLICATION->SetPageProperty("title", "Совет директоров ОАО «ОСК»");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", "");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.employees_list", "main", array("SECTION_ID"=>17), false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>