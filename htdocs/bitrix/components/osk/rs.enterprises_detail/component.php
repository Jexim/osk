<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/*
 * $_REQUEST['ELEMENT_CODE'] символьный код предприятия
 */
if (CModule::IncludeModule("iblock")) {   
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME");
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN");
    }  
    //Получаем массив городов
    $arFilter = Array("IBLOCK_CODE"=>"city", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['CITY'][$ob['ID']] = $ob;
    }
    
    //Получаем массив характеристик
    $arFilter = Array("IBLOCK_CODE"=>"characteristics_enterprise", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['CHARACTRISTICS'][$ob['ID']] = $ob;
    }
    
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME", "PROPERTY_CITY", "PROPERTY_CHARACTERISTICS", "PROPERTY_FULL_NAME",
             "DETAIL_TEXT", "PROPERTY_URL", "PROPERTY_ADDRESS", "PROPERTY_FAX", "PROPERTY_PHONE", "PROPERTY_EMAIL", 
             "DETAIL_PICTURE", "PROPERTY_LEADER_NAME", "PREVIEW_PICTURE", "PROPERTY_POSITION");
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN", "PROPERTY_CITY", "PROPERTY_CHARACTERISTICS", "PROPERTY_FULL_NAME_EN",
             "PROPERTY_DETAIL_TEXT_EN", "PROPERTY_URL", "PROPERTY_ADDRESS_EN", "PROPERTY_FAX", "PROPERTY_PHONE", "PROPERTY_EMAIL",
             "DETAIL_PICTURE", "PROPERTY_LEADER_NAME_EN", "PREVIEW_PICTURE", "PROPERTY_POSITION_EN");
    }  
    $arFilter = Array("IBLOCK_CODE"=>"companies_list", "ACTIVE"=>"Y", "CODE"=>$_REQUEST['ELEMENT_CODE']);
    //Получаем массив предприятий    
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ELEMENT'] = $ob;
    }
    
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME", "PROPERTY_SHORT_TEXT", "PREVIEW_PICTURE", "PROPERTY_SCHEME", "PROPERTY_SCHEME_TRANSPARENCY", "DETAIL_PAGE_URL");
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN", "PROPERTY_SHORT_TEXT_EN", "PREVIEW_PICTURE", "PROPERTY_SCHEME", "PROPERTY_SCHEME_TRANSPARENCY", "DETAIL_PAGE_URL");
    }
    //Получаем массив связанных проектов
    $arFilter = Array("IBLOCK_CODE"=>"products", "ACTIVE"=>"Y", array("LOGIC"=>"OR", array("PROPERTY_DEVELOPER"=>$arResult['ELEMENT']['ID'], "PROPERTY_BUILDER"=>$arResult['ELEMENT']['ID'])));
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][$ob['ID']] = $ob;
    }
}

$this->IncludeComponentTemplate();