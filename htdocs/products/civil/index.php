<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гражданская продукция");
?>
<?$APPLICATION->IncludeComponent("osk:rs.products_list", "default", array("SECTION_ID"=>6, "TYPE"=>"civil"), false);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>