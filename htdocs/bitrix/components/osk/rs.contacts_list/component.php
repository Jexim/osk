<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/*
 * 
 */

if (CModule::IncludeModule("iblock")) {      
    //Делаем выборку контактов в зависимости от языка
    if(SITE_ID=='s1'){
        $arSelect = Array("ID", "NAME", "PROPERTY_ADDRESS", "DATE_ACTIVE_FROM", "PROPERTY_FAX", "PROPERTY_PHONE", "PROPERTY_EMAIL", "PROPERTY_COORDINATES");
    } else {
        $arSelect = Array("ID", "PROPERTY_NAME_EN", "PROPERTY_ADDRESS_EN", "DATE_ACTIVE_FROM", "PROPERTY_FAX", "PROPERTY_PHONE", "PROPERTY_EMAIL", "PROPERTY_COORDINATES");
    }    
    //Получаем массив документов
    $arFilter = Array("IBLOCK_CODE"=>"contacts", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult[$ob['ID']] = $ob;
    }
}

$this->IncludeComponentTemplate();