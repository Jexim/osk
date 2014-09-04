<?
$arUrlRewrite = array(
        array(
		"CONDITION" => "#/press-center/news/(20[0-9]{2})\\/(/?)#",
		"RULE" => "YEAR=\$1",
		"ID" => "",
		"PATH" => "/press-center/news/index.php",
	),
	array(
		"CONDITION" => "#/press-center/news/([a-zA-Z0-9_-]+)(/?)#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/press-center/news/element.php",
	),
        array(
		"CONDITION" => "#/products/([a-zA-Z0-9_-]+)(/?)#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/products/element.php",
	), 		
);

?>