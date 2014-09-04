<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->IncludeComponentTemplate();

if (CModule::IncludeModule("iblock")) {    
    if (!empty($_FILES['i_file'])) {
        //Работа с файлом импорта
        $stValue = file_get_contents($_FILES['i_file']['tmp_name']);
//        $arStValue = preg_split('/\\r\\n?|\\n/', $stValue);
        $stValue = substr($stValue,1,-1);
        $arStValue = preg_split('/"\n"/', $stValue);
        foreach ($arStValue as $value) {
            $arStResult[] = explode('|', $value);
        }
//Новости        
//        foreach ($arStResult as $value) {
//            if ($value[0] != null) {
//                $el = new CIBlockElement;
//                $arDate = explode('-', $value[0]);
//                $date = $arDate[2] . '.' . $arDate[1] . '.' . $arDate[0] .' 00:00:00';
//                $arLoadProductArray = Array(
//                    "IBLOCK_ID" => 18,
//                    "NAME" => $value[1],
//                    "ACTIVE" => "Y",
//                    "DATE_ACTIVE_FROM" =>  $date,
//                    "DETAIL_TEXT" => substr($value[2],0, -1),
//                    "DETAIL_TEXT_TYPE" => 'html'
//                );      
//               
//                if($PRODUCT_ID = $el->Add($arLoadProductArray))
//                    echo "New ID: ".$PRODUCT_ID."<br>";
//                else
//                    echo "Error: ".$el->LAST_ERROR."<br>";
//            }
//        }      
//Совет директоров
//        foreach ($arStResult as $value) {
//            if ($value[0] != null) {
//
//                $el = new CIBlockElement;
//                $PROP = array();
//                $PROP['NAME_EN'] = $value[1];
//                $PROP['PLACE_WORK_EN'] = $value[3];               
//                $PROP['PLACE_WORK'] = $value[4];
//                $PROP['POSITION_EN'] = $value[5];
//                $PROP['POSITION'] = $value[2];
//
//                $arLoadProductArray = Array(
//                    "IBLOCK_ID" => 15,
//                    "PROPERTY_VALUES" => $PROP,
//                    "NAME" => $value[0],
//                    "ACTIVE" => "Y",
//                    "IBLOCK_SECTION_ID" => 17,
//                );
//                if($PRODUCT_ID = $el->Add($arLoadProductArray))
//                    echo "New ID: ".$PRODUCT_ID."<br>";
//                else
//                    echo "Error: ".$el->LAST_ERROR."<br>";
//            }
//        }        
//Предприятия, города        
//        foreach ($arStResult as $value) {
//            if ($value[0] != null) {
//
//                $el = new CIBlockElement;
//                $PROP = array();
//                $PROP['FULL_NAME'] = $value[1];               
//
//                //Добавляем город
//                if(empty($arCity[$value[2]])){
//                    $arLoadProductArray = Array(
//                        "IBLOCK_ID" => 31,
//                        "NAME" => $value[2],
//                        "ACTIVE" => "Y",
//                    );
//                    if($CITY_ID = $el->Add($arLoadProductArray)){
//                        echo "New city ID: ".$CITY_ID."<br>";
//                        $arCity[$value[2]] = $CITY_ID;
//                    }else
//                        echo "Error: ".$el->LAST_ERROR."<br>";
//                }else {
//                    $CITY_ID = $arCity[$value[2]];
//                }
//               
//                $PROP['CITY'] = $CITY_ID;
//                $PROP['ADDRESS'] = $value[3];
//                $PROP['PHONE'] = $value[4];
//                $PROP['FAX'] = $value[5];
//                $PROP['URL'] = $value[6];
//                $PROP['EMAIL'] = $value[7];
//                
//                $arLoadProductArray = Array(
//                    "IBLOCK_ID" => 6,
//                    "PROPERTY_VALUES" => $PROP,
//                    "NAME" => $value[0],
//                    "ACTIVE" => "Y",
//                );
//                if($PRODUCT_ID = $el->Add($arLoadProductArray))
//                    echo "New ID: ".$PRODUCT_ID."<br>";
//                else
//                    echo "Error: ".$el->LAST_ERROR."<br>";
//            }
//        }
        
//Продукция/Проэкты
//        foreach ($arStResult as $value) {
//            if ($value[0] != null) {
//
//                $el = new CIBlockElement;
//                $PROP = array();
//                $PROP['SHORT_TEXT'] = $value[3];
//                $PROP['NAME_EN'] = $value[4];
//                $PROP['SHORT_TEXT_EN'] = $value[5];
//
//                $arLoadProductArray = Array(
//                    "IBLOCK_ID" => 5,
//                    "PROPERTY_VALUES" => $PROP,
//                    "NAME" => $value[2],
//                    "ACTIVE" => "Y",
//                    "IBLOCK_SECTION_ID" => $value[1],
//                );
//                if($PRODUCT_ID = $el->Add($arLoadProductArray))
//                    echo "New ID: ".$PRODUCT_ID."<br>";
//                else
//                    echo "Error: ".$el->LAST_ERROR."<br>";
//            }
//        }
    }
    //Генерация CODE
//    $arSelect = Array("ID", "NAME");
//    $arFilter = Array("IBLOCK_CODE"=>"news", "ACTIVE"=>"Y");
//    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
//    while($ob = $res->GetNext()){
//        $arResult[$ob['ID']] = CUtil::translit($ob['NAME'], "ru", array("replace_space"=>"-","replace_other"=>"-"));
//    }
//    print_r($arResult);
//    foreach ($arResult as $key=>$value){
//        $el = new CIBlockElement;
//        $arLoadProductArray = Array(
//            "CODE" => $value,
//        );
//        $res = $el->Update($key, $arLoadProductArray);
//    }
}
