<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Военная продукция");
$APPLICATION->SetPageProperty("keywords", "Военная продукция");
$APPLICATION->SetPageProperty("description", "Военная продукция");
$APPLICATION->AddChainItem("Военная продукция", "");
?>

<?$APPLICATION->IncludeComponent("osk:rs.products_list", "default", array("SECTION_ID"=>5, "TYPE"=>"military"), false);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>