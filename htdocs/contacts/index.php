<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
$APPLICATION->SetPageProperty("title", "Контактная информация");
$APPLICATION->SetPageProperty("keywords", "Контактная информация");
$APPLICATION->SetPageProperty("description", "Контактная информация");
?>
<div class="block">
    <?$APPLICATION->IncludeComponent("osk:rs.contacts_list", "main", array(), false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>