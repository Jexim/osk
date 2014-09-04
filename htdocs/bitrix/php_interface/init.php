<?php
//закроем сайт для не авторизованных пользователей
AddEventHandler("main", "OnProlog", "CloseAccessForGroup");
function CloseAccessForGroup(){
    global $USER, $APPLICATION;
    $mas = $USER->GetUserGroupArray();
    if (count($mas) == 1 && in_array(2, $mas) && (strpos($APPLICATION->GetCurPage(),'/bitrix/admin/'))===false){
        header("Location: /bitrix/admin/");
        die();
    }
}