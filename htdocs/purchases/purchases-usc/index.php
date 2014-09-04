<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Закупки ОСК");
$APPLICATION->SetPageProperty("title", "Закупки ОСК");
$APPLICATION->SetPageProperty("keywords", "Закупки ОСК");
$APPLICATION->SetPageProperty("description", "Закупки ОСК");
?>
<div class="block second">
    
	<script type="text/javascript" charset="utf-8" id="fabrikant_widget" src="https://ws.fabrikant.ru/soap/tradelist/pub/v2/widget.php?key=a71d4fe7f8705cf4fbfd52ba56461ed9"></script>

    
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>