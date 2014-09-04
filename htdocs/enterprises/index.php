<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Предприятия ОСК");
$APPLICATION->SetPageProperty("title", "Предприятия ОСК");
$APPLICATION->SetPageProperty("keywords", "Предприятия ОСК");
$APPLICATION->SetPageProperty("description", "Предприятия ОСК");
?>
<div class="block second">
    <?$APPLICATION->IncludeComponent("osk:rs.enterprises_list", "main", array(), false);?>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>