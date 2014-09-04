<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {   
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME");
         $arSort = Array('name'=>'desk');
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN");
         $arSort = Array('PROPERTY_NAME_EN'=>'desk');
    }  
    //Получаем массив городов
    $arFilter = Array("IBLOCK_CODE"=>"city", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['CITY'][$ob['ID']] = $ob;
        $arResult['ARR_CITY'][$ob['ID']] = Array();
        $arResult['ITEM_BY_CITY_DESK'][$ob['NAME']] = Array();
    }
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME");
         $arSort = Array('name'=>'asc');
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN");
         $arSort = Array('PROPERTY_NAME_EN'=>'asc');
    }  
    //Получаем массив характеристик
    $arFilter = Array("IBLOCK_CODE"=>"characteristics_enterprise", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['CHARACTERISTICS'][$ob['ID']] = $ob;
    }
    
    //Делаем выборку в зависимости от языка
    if(SITE_ID=='s1'){
         $arSelect = Array("ID", "NAME", "PROPERTY_CITY", "PROPERTY_CHARACTERISTICS", "DETAIL_PAGE_URL");
         $arSort = Array('name'=>'asc');
    } else {
         $arSelect = Array("ID", "PROPERTY_NAME_EN", "PROPERTY_CITY", "PROPERTY_CHARACTERISTICS", "DETAIL_PAGE_URL");
         $arSort = Array('PROPERTY_NAME_EN'=>'asc');
    }  
    $arFilter = Array("IBLOCK_CODE"=>"companies_list", "ACTIVE"=>"Y");
    //Добавляем фильтры
    //Фильтр по городам
    if(!empty($_REQUEST['city'])){
        $arFilter['PROPERTY_CITY'] = $_REQUEST['city'];
    }
    //Фильтр по названию
    if(!empty($_REQUEST['SEARCH_TEXT'])){
        //В зависимости от языка
        if(SITE_ID=='s1'){
            $arFilter['NAME'] = '%' . $_REQUEST['SEARCH_TEXT'] . '%';
        } else {
            $arFilter['PROPERTY_NAME_EN'] = '%' . $_REQUEST['SEARCH_TEXT'] . '%';
        }         
    }
    //Получаем массив предприятий отсортированых по названию
    $res = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][$ob['ID']] = $ob;
        if(!empty($arResult['CITY'][$ob['PROPERTY_CITY_VALUE']])){
            $arResult['ARR_CITY'][$ob['PROPERTY_CITY_VALUE']] = $arResult['CITY'][$ob['PROPERTY_CITY_VALUE']];
        }
        if(!empty($arResult['CITY'][$ob['PROPERTY_CITY_VALUE']])){
            $arResult['ARR_CHARACTERISTICS'][$ob['PROPERTY_CHARACTERISTICS_VALUE']] = $arResult['CHARACTERISTICS'][$ob['PROPERTY_CHARACTERISTICS_VALUE']];
        }
        $arResult['ITEM_BY_CITY_ASC'][$arResult['CITY'][$ob['PROPERTY_CITY_VALUE']]['NAME']][$ob['ID']] = $ob;
        $arResult['ITEM_BY_CITY_DESK'][$arResult['CITY'][$ob['PROPERTY_CITY_VALUE']]['NAME']][$ob['ID']] = $ob;
    }
    ksort($arResult['ITEM_BY_CITY_ASC']);
}

$this->IncludeComponentTemplate();