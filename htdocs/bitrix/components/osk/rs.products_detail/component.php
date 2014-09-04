<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/*
 * $_REQUEST['ELEMENT_CODE'] - символьный код элемента
 */

if (CModule::IncludeModule("iblock")) {       
    //Делаем выборку разделов в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID");
    } else {
         $arSelect = Array("ID", "UF_NAME_EN", "IBLOCK_SECTION_ID");
    }  
    //Получаем массив разделов
    $arFilter = Array('IBLOCK_CODE'=>"products", 'GLOBAL_ACTIVE'=>'Y');
    $db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true, $arSelect);
    while($ar_result = $db_list->GetNext()){
        $arResult['SECTION'][$ar_result['ID']] = $ar_result;
    }
    
    //Делаем выборку предприятий в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
    } else {
         $arSelect = Array("ID", "NAME_EN", "DETAIL_PAGE_URL");
    }
    $arFilter = Array("IBLOCK_CODE"=>"companies_list", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['COMPANIES'][$ob['ID']] = $ob;
    } 
    
    //Получаем данные проекта
    $arFilter = Array("IBLOCK_CODE"=>"products", "ACTIVE"=>"Y", "CODE"=>$_REQUEST['ELEMENT_CODE']);
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, Array("*"));
    while($ob = $res->GetNextElement()){
        $arResult['ELEMENT']['PROP'] = $ob->GetProperties();
        $arResult['ELEMENT']['ITEM'] = $ob->GetFields();
    }
    
    //Получаем массив всех проектов
    //$arFilter = Array("IBLOCK_CODE"=>"products", "ACTIVE"=>"Y", "SECTION_ID"=>$arResult['SECTION'][$arResult['ELEMENT']['ITEM']['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID'], "INCLUDE_SUBSECTIONS"=>"Y");
    $arFilter = Array("IBLOCK_CODE"=>"products", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, Array("ID", "NAME", "DETAIL_PAGE_URL"));
    while($ob = $res->GetNext()){
        $arProducts[] = $ob['ID'];
        $arAllProducts[$ob['ID']] = $ob;
    }
    
    //Определяем следющий элемент
    foreach ($arProducts as $value){
        if($arResult['ELEMENT']['ITEM']['ID']==next($arProducts))
            break;
    }
    $arNextElement = next($arProducts);
    $_ENV['NEXT_ELEMENT'] = $arAllProducts[$arNextElement];
    
    //Получаем связанные новости проекта
    $arFilter = Array("IBLOCK_CODE"=>"news", "ACTIVE"=>"Y", "PROPERTY_RELATED_PRODUCTS"=>$arResult['ELEMENT']['ITEM']['ID']);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID"));
    while($ob = $res->GetNext()){
        $arResult['NEWS'] = true;      
    }
    
    //Получаем связанные пресс-релизы
    $arFilter = Array("IBLOCK_CODE"=>"press_releases", "ACTIVE"=>"Y", "PROPERTY_RELATED_PRODUCTS"=>$arResult['ELEMENT']['ITEM']['ID']);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID"));
    while($ob = $res->GetNext()){
        $arResult['PRESS_RELEASES'] = true;      
    }
    
    //Получаем связанные новости проекта
    $arFilter = Array("IBLOCK_CODE"=>"purchases_usc", "ACTIVE"=>"Y", "PROPERTY_RELATED_PRODUCTS"=>$arResult['ELEMENT']['ITEM']['ID']);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID"));
    while($ob = $res->GetNext()){
        $arResult['PURCHASES_USC'] = true;      
    }
}

$this->IncludeComponentTemplate();