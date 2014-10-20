<?	//Подключение компонента рекомендованных спецпредложений
	// homes/detail.php
$APPLICATION->IncludeComponent(
	"totouch:recommended.list",
	".default",
	Array(
		"IBLOCK_TYPE" => "objects",
		"IBLOCKS" => array("9", "21"),
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"NEWS_COUNT" => "3",
		"PIC_WIDTH" => "210",
		"PIC_HEIGHT" => "210",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "Y"
	)
);?>

<?	//подключение непонятного компонента в детальной страницы домов
$APPLICATION->IncludeComponent("bitrix:news.detail", "houses", array(
	"IBLOCK_TYPE" => "objects",
	"IBLOCK_ID" => "9",
	"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
	"ELEMENT_CODE" => "",
	"CHECK_DATES" => "Y",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "video_watch",
		1 => "features",
		2 => "house_area",
		3 => "land_area",
		4 => "special",
		5 => "status",
		6 => "coords",
		7 => "projects",
		8 => "village",
		9 => "",
	),
	"IBLOCK_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"USE_PERMISSIONS" => "N",
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Страница",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>