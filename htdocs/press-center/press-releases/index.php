<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Пресс-релизы");
$APPLICATION->SetPageProperty("title", "Пресс-релизы");
$APPLICATION->SetPageProperty("keywords", "Пресс-релизы");
$APPLICATION->SetPageProperty("description", "Пресс-релизы");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.press_releases_list", "main", false, false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
