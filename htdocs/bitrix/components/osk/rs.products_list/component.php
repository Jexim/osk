<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/*
 * $arParams["SECTION_ID"] - ID текущего раздела (Военные/Гражданские)
 * $arParams["TYPE"] - тип продукции (Военные/Гражданские)
 */

if (CModule::IncludeModule("iblock")) {   
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME");
    } else {
         $arSelect = Array("ID", "UF_NAME_EN");
    }  
    //Получаем массив разделов
    $arFilter = Array('IBLOCK_CODE'=>"products", 'GLOBAL_ACTIVE'=>'Y', "SECTION_ID"=>$arParams["SECTION_ID"], "DEPTH_LEVEL"=>2);
    $db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true, $arSelect);
    while($ar_result = $db_list->GetNext()){
        $arResult['SECTION'][$ar_result['ID']] = $ar_result;
        if(!empty($ob['IBLOCK_SECTION_ID']))
            $arResult['ITEM'][$ob['IBLOCK_SECTION_ID']] = Array();
    }
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME", "PROPERTY_SHORT_TEXT", "PREVIEW_PICTURE", "PROPERTY_SCHEME", "PROPERTY_SCHEME_TRANSPARENCY", "DETAIL_PAGE_URL", "SECTION_ID");
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN", "PROPERTY_SHORT_TEXT_EN", "PREVIEW_PICTURE", "PROPERTY_SCHEME", "PROPERTY_SCHEME_TRANSPARENCY", "DETAIL_PAGE_URL", "SECTION_ID");
    }  
    //Получаем массив проектов
    $arFilter = Array("IBLOCK_CODE"=>"products", "ACTIVE"=>"Y", "SECTION_ID"=>$arParams["SECTION_ID"], "INCLUDE_SUBSECTIONS"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][$ob['IBLOCK_SECTION_ID']][$ob['ID']] = $ob;
    }
    $arResult['TYPE'] = $arParams["TYPE"];
}

$this->IncludeComponentTemplate();