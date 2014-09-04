<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Предприятия ОСК");
$APPLICATION->SetPageProperty("title", "Предприятия ОСК");
$APPLICATION->SetPageProperty("keywords", "Предприятия ОСК");
$APPLICATION->SetPageProperty("description", "Предприятия ОСК");
?>
<div class="block second">

	<div class="enterprises_search_block">

		<div class="sub_filter sub_filter_enterprises">
			<div class="item"><span class="item_category">Специализация:</span></div>
			<div class="item switcher_item for_jn_view selected"><span class="pseudo">Все</span></div>
			<div class="item switcher_item for_fb_view"><span class="pseudo">Надводные суда</span></div>
			<div class="item switcher_item for_fb_view"><span class="pseudo">Подводные лодки</span></div>
			<div class="item switcher_item for_fb_view"><span class="pseudo">Гражданские проекты</span></div>
		</div>

		<!-- <div class="list_search_block"> -->
			
		<!-- </div> -->

		<div class="search_field_enterprises">
			<div class="form_validate field" data-id="field">
				<form>
					<input type="text" data-xp="required: true" placeholder="Поиск по сайту" value="" /><button data-xp="enabled_on_completed: true" class="small">Найти</button>
				</form>
			</div>
		</div>
		<div class="select_field_enterprises">
			<select class="pretty_select">
                <option>Все города</option>
                <option>Астрахань</option>
                <option>Владивосток</option>
                <option>Зеленодольск</option>
                <option>Москва</option>
                <option>Нижний Новгород</option>
                <option>Санкт-Петербург</option>
            </select>
		</div>
		<div class="clear"></div>
	</div>

</div>

<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<div class="enterprises_map_block">
	<div id="map" style="width: 100%; height: 690px"></div>
</div>

<script type="text/javascript">
    ymaps.ready(init);
    var myMap;

    function init(){     
        myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 4
        });

        /** Коллекция предприятий **/
        var enterpriseCollection = new ymaps.GeoObjectCollection(); 

        /** Создаем метки **/
		myPlacemark = new ymaps.Placemark(
			[55.76, 37.64], 
			{
				balloonContent: '\
				<div class="enterprise_ballon">\
					<div class="ballon__name">\
						<a href="">ОАО «Зеленодольское проектно-конструкторское бюро»</a>\
					</div>\
					<div class="ballon__category">\
						<span>Гражданские проекты, подводные лодки</span>\
					</div>\
					<div class="ballon__address">\
						<span>г. Санкт-Петербург, ул. Ленина, 41</span>\
					</div>\
					<div class="ballon__phone">\
						<span>+7 (84371) 53588</span>\
					</div>\
					<div class="ballon__email">\
						<span><a href="mailto:info@zpkb.com">info@zpkb.com</a></span>\
					</div>\
					<div class="ballon__site">\
						<span><a href="http://zpkb.com">zpkb.com</a><a href="http://zpkb.com">&nbsp;&nbsp;<img src="/images/icon-link.png"></a></span>\
					</div>\
				</div>\
				'
            }, 
            {
				iconLayout: 'default#image',
            	iconImageHref: '/images/placemark.png',
            	iconImageSize: [28, 36], // размеры картинки
            	iconImageOffset: [ - 14, - 28], // смещение картинки
            }
		);

		/** Добавляем метки в коллекцию **/
		enterpriseCollection.add(myPlacemark);

		/** Задаем стили меткам **/
		enterpriseCollection.options.set({
            // hintPane: 'floats',
            // hintFitPane: true,
            hideIconOnBalloon: false,
            // balloonLayout: "default#imageWithContent",
            // balloonShadow: false,
            // balloonAutoPan: false
        });

		/** Добаляем коллекцию предприятий на карту **/
        myMap.geoObjects.add(enterpriseCollection);

    }
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>