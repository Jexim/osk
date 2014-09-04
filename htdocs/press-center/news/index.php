<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Новости");
$APPLICATION->SetPageProperty("title", "Новости");
$APPLICATION->SetPageProperty("keywords", "Новости");
$APPLICATION->SetPageProperty("description", "Новости");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.news_list", "main", false, false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
