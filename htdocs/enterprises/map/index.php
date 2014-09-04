<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Предприятия ОСК");
$APPLICATION->SetPageProperty("title", "Предприятия ОСК");
$APPLICATION->SetPageProperty("keywords", "Предприятия ОСК");
$APPLICATION->SetPageProperty("description", "Предприятия ОСК");
?>
<?$APPLICATION->IncludeComponent("osk:rs.enterprises_list", "map", array(), false);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
