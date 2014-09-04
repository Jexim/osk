<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
    <?$APPLICATION->IncludeComponent("osk:rs.news_list", "ajax",Array(), false);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>