<?
// villages/section.php seo
$ceogate = $_SERVER['REQUEST_URI'];
if (preg_match("/sherwood/", $ceogate)) {

$APPLICATION->SetPageProperty("description", "Шервуд - это коттеджный поселок в сосновом бору. В коттеджном поселке Шервуд все готово к проживанию.");
$APPLICATION->SetPageProperty("keywords_inner", "поселок, коттеджный, шервуд");
$APPLICATION->SetPageProperty("title", "Коттеджный поселок Шервуд от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "поселок, коттеджный, шервуд");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Шервуд");
} elseif (preg_match("/riverside/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Риверсайд - это коттеджный поселок на речном побережье. В поселке Риверсайд все готово к заселению.");
$APPLICATION->SetPageProperty("keywords_inner", "риверсайд, поселок, коттеджный");
$APPLICATION->SetPageProperty("title", "Коттеджный поселок Риверсайд от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "риверсайд, поселок, коттеджный");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Риверсайд");
} elseif (preg_match("/parkavenue/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Коттеджный поселок Парк Авеню выстроен в американском стиле. Выберите таунхаус или апартаменты в поселке Park Avenue от  Villagio Estate.");
$APPLICATION->SetPageProperty("keywords_inner", "парк, авеню, поселок, таунхаус, апартаменты, коттеджный, park, avenue");
$APPLICATION->SetPageProperty("title", "Коттеджный поселок Парк Авеню - таунхаусы и апартаменты в поселке Park Avenue от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "парк, авеню, поселок, таунхаус, апартаменты, коттеджный, park, avenue");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Парк Авеню");
} elseif (preg_match("/madisonpark/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Коттеджный поселок Medison Park расположен в экологически чистом районе. В поселке Мэдисон Парк сохранена естественная красота ландшафтов.");
$APPLICATION->SetPageProperty("keywords_inner", "мэдисон, парк, поселок, коттеджный, madison, park");
$APPLICATION->SetPageProperty("title", "Коттеджный поселок Мэдисон Парк -выберите дом в поселке Madison Park от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "мэдисон, парк, поселок, коттеджный, madison, park");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/monteville/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Элитный поселок Monteville с красивыми пейзажами и садами.  Villagio Estate предлагает приобрести участок в коттеджном поселке  Монтевиль.");
$APPLICATION->SetPageProperty("keywords_inner", "монтевиль, поселок, коттеджный, monteville");
$APPLICATION->SetPageProperty("title", "Коттеджный поселок Монтевиль - дома в поселке Monteville от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "монтевиль, поселок, коттеджный, monteville");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/millennium/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Миллениум Парк - элитный коттеджный поселок с водными каналами на Новой Риге. Выберите дом в коттеджном поселке Millennium Park от  Villagio Estate.");
$APPLICATION->SetPageProperty("keywords_inner", "миллениум, парк, поселок, новая рига, коттеджный, millennium, park");
$APPLICATION->SetPageProperty("title", "Millennium Park. Поселок Миллениум Парк - элитный коттеджный поселок на Новой Риге от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "миллениум, парк, поселок, новая рига, коттеджный, millennium, park");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/lazurnybereg/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Коттеджный поселок Лазурный берег от Villagio Estate расположен  недалеко от Пестовского водохранилища.");
$APPLICATION->SetPageProperty("keywords_inner", "поселок, берег, лазурный, коттеджный");
$APPLICATION->SetPageProperty("title", "Коттеджный поселок Лазурный берег от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "поселок, берег, лазурный, коттеджный");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/greenfield/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "Элитный коттеджный поселок Гринфилд от  Villagio Estate. Выберите дом в живописном уголке поселка Greenfield. ");
$APPLICATION->SetPageProperty("keywords_inner", "поселок, коттеджный, элитный, гринфилд, greenfield");
$APPLICATION->SetPageProperty("title", "Гринфилд (Greenfield) - элитный коттеджный поселок с озером от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "поселок, коттеджный, элитный, гринфилд, greenfield");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} else {
$APPLICATION->SetPageProperty("description", "Элитные коттеджные поселки на Новой Риге. Предлагаем купить участок в загородном поселке Подмосковья на Новорижском шоссе. Коттеджные поселки премиум класса в Московской области от  Villagio Estate.");
$APPLICATION->SetPageProperty("keywords_inner", "поселок, подмосковье, новая рига, московский, область, участок, премиум, класс, новый, коттеджный, новорижское шоссе, элитный, загородный, купить");
$APPLICATION->SetPageProperty("title", "Новые коттеджные поселки Подмосковья на Новорижском шоссе - купить участок в элитном поселке премиум класса на Новой Риге в Московской области от Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "поселок, подмосковье, новая рига, московский, область, участок, премиум, класс, новый, коттеджный, новорижское шоссе, элитный, загородный, купить");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Поселки");
}
?>