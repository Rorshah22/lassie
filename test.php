<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><? $APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"main_section.list",
		array(
			"COMPONENT_TEMPLATE" => "main_section.list",
			"IBLOCK_TYPE" => "products",
			"IBLOCK_ID" => "9",
			"SECTION_ID" => $_REQUEST["SECTION_CODE"],
			"SECTION_CODE" => "",
			"COUNT_ELEMENTS" => "Y",
			"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
			"TOP_DEPTH" => "3",
			"SECTION_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "sectionsFilter",
			"VIEW_MODE" => "LINE",
			"SHOW_PARENT_NAME" => "Y",
			"SECTION_URL" => "/catalog/index.php",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"CACHE_FILTER" => "N",
			"ADD_SECTIONS_CHAIN" => "Y"
		),
		false
	); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>