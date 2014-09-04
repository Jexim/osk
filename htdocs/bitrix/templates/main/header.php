<?if (!$USER->IsAuthorized()) LocalRedirect("/bitrix/admin/");?>

<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<!-- saved from url=(0035)/guideline/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="icon" href="/f/1/media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/f/1/min/global/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/f/1/min/guideline/guideline.css" media="all">
    <link rel="stylesheet" href="/f/1/min/global/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="start" href="/">
    <link rel="stylesheet" type="text/css" href="/f/1/min/global/pretty_form.css" media="all">
    <link rel="stylesheet" type="text/css" href="/f/1/min/global/selectik.css" media="all">

    <link rel="stylesheet" type="text/css" href="/css/rs.css">

    <?// $APPLICATION->ShowHead();?>

    <? $APPLICATION->ShowMeta("keywords");?>
    <? $APPLICATION->ShowMeta("description");?>
    <? $APPLICATION->ShowCSS();?>



    <body id="guideline" class="small_block_padding big_file_names">

<?/*
<div id="panel">
    <?$APPLICATION->ShowPanel(); ?>
</div>
*/?>
        <div id="layout">
        
            <div id="content" class="content_1024">
                
                <div id="sidebar">
    
                    <div class="search">
                        <form>
                            <input type="text" class="search_field" />
                        </form>
                    </div>

                    <div class="all_sait">
                        <span class="pseudo">Весь сайт</span>
                    </div>
        
                    <a id="logo" href="/"></a>
            
                    

                    <ul class="navigation navigation_medium" >

                        <?if($_SERVER['REAL_FILE_PATH']=='/products/element.php'){?>

                            <li class="with_icon catalog_military">
                              <a href="/products/">
                                Военная продукция
                              </a>
                            </li>
                            <li class="with_icon catalog_civil">
                              <a href="/products/civil/">
                                Гражданская продукция
                              </a>
                            </li>

                        <?}elseif($_SERVER['SCRIPT_NAME'] == '/products/index.php' || $_SERVER['SCRIPT_NAME'] == '/products/civil/index.php'){?>
                            <li class="with_icon enterprises">
                              <a href="/enterprises/">
                                Предприятия ОСК
                              </a>
                            </li>
                        <?}else{?>

                            <li class="with_icon news">
                                <a href="/press-center/news/">
                                    Новости
                                </a>
                            </li>
                            <li class="with_icon catalog_military">
                              <a href="/products/">
                                Военная продукция
                              </a>
                            </li>
                            <li class="with_icon catalog_civil">
                              <a href="/products/civil/">
                                Гражданская продукция
                              </a>
                            </li>
                            <li class="with_icon photo">
                              <a href="/press-center/photo/">
                                Фотоматериалы
                              </a>
                            </li>
                            <li class="with_icon enterprises">
                              <a href="/enterprises/">
                                Предприятия ОСК
                              </a>
                            </li>

                        <?}?>
                    </ul>

                    

                </div>
                
                <div id="wrapper">
                    <div id="page" class="page_top_padding page_bg">
                        
                        <div class="block before_wide most_higher"> <!--top_navigation-->
                            
                            <div class="lang">
                                <div class="item selected"><b>РУС</b></div>
                                <div class="item"><a href="/">ENG</a></div>
                            </div>
                            
                            <div class="top_menu top_menu_big top_menu_gray">
                                <?
                                $APPLICATION->IncludeComponent("bitrix:menu", "general_menu", Array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "submenu",
                                    "USE_EXT" => "Y",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "Y",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => ""
                                        )
                                );
                                ?>
                            </div>

                        </div>
                        <? if($_SERVER['REQUEST_URI']!='/products/' && $_SERVER['REQUEST_URI']!='/products/civil/' && $_SERVER['REAL_FILE_PATH']!='/products/element.php'): ?>
                            <div class="block clear">
                                <h1><?$APPLICATION->ShowTitle(false);?></h1>                              
                                <?
                                $APPLICATION->IncludeComponent("bitrix:menu", "sub_menu", Array(
                                    "ROOT_MENU_TYPE" => "submenu",
                                    "MAX_LEVEL" => "1",
                                    "USE_EXT" => "Y",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => ""
                                ));
                                ?>
                            </div>
                        <? endif; ?>