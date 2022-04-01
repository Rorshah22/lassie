<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);


if (in_array($_GET["page"], [3, 6, 9, 12])) {
	$arParams["PAGE_ELEMENT_COUNT"] = $_GET["page"];
	// $arParams["PAGE_ELEMENT_COUNT"] = $_GET["page"];
}

if (isset($_GET["sortBy"])) {
	if ($_GET["sortBy"] === "popular") {
		$arParams["ELEMENT_SORT_FIELD"] = 'PROPERTY_PRICE';
	}
	if ($_GET["sortBy"] === "price") {
		$arParams["ELEMENT_SORT_FIELD"] = 'PROPERTY_PRICE';
	}
	if ($_GET["sortBy"] === "new") {
		$arParams["ELEMENT_SORT_FIELD"] = 'PROPERTY_NEW';
	}
	if ($_GET["sortBy"] === "availibel") {
		$arParams["ELEMENT_SORT_FIELD"] = 'PROPERTY_PRICE';
	}
}

if ($_GET["ajax_mode"] == 'y') {
	$APPLICATION->RestartBuffer();
}
?>

<? if ($_GET["ajax_mode"] !== 'y') : ?>
	<h1>Головные уборы</h1>
	<h2>SECTIONS</h2>
	<p data-block='0' class="catalog-page__text">Шапочки, кепки и шляпы Lassie® защищают круглый год. Выбирайте подходящий головной убор: шляпку с полями или кепку с козырьком на лето, тоненькую шапочку без подкладки на осень или весну, и шапку с подкладкой из флиса или джерси на зиму. Многие наши
		шапочки имеют специальные ветронепроницаемые вставки в области ушей для дополнительной защиты. Для самых маленьких лучшим выбором во время метели и снежной бури станут наши ветрозащитные зимние шапки или шапки из искусственного меха.</p>

	<a href="javascript:void(0);" data-btn='0' data-text="Скрыть текст" class="js-block-show link text">Читать
		далее</a><a href="javascript:void(0);" data-btn='1' data-text="Скрыть фильтр" class="js-block-show link text">Показать фильтр</a>

	<div class="catalog catalog-page__catalog">
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.smart.filter",
			"",
			array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"SECTION_ID" => $arCurSection['ID'],
				"FILTER_NAME" => $arParams["FILTER_NAME"],
				"PRICE_CODE" => $arParams["~PRICE_CODE"],
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
				"SAVE_IN_SESSION" => "N",
				"FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
				"XML_EXPORT" => "N",
				"SECTION_TITLE" => "NAME",
				"SECTION_DESCRIPTION" => "DESCRIPTION",
				'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
				"TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
				'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
				'CURRENCY_ID' => $arParams['CURRENCY_ID'],
				"SEF_MODE" => $arParams["SEF_MODE"],
				"SEF_RULE" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["smart_filter"],
				"SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
				"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
				"INSTANT_RELOAD" => $arParams["INSTANT_RELOAD"],
				"SHOW_ALL_WO_SECTION" => "Y",
			),
			$component,
			array('HIDE_ICONS' => 'Y')
		);
		?>
	<? endif; ?>

	<?

	$section = $_GET["section_id"] ?? $arResult["VARIABLES"]["SECTION_ID"];

	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		"",
		array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],

			"SHOW_ALL_WO_SECTION" => "Y",
			"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
			"SET_TITLE" => 'N',
			"AJAX" => $_GET["ajax_mode"],
			"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
			"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
			"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
			"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
			"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
			"BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
			"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
			"BASKET_URL" => $arParams["BASKET_URL"],
			"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
			"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
			"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
			"FILTER_NAME" => $arParams["FILTER_NAME"],
			"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_FILTER" => $arParams["CACHE_FILTER"],
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"SET_STATUS_404" => $arParams["SET_STATUS_404"],
			"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
			"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
			"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
			"PRICE_CODE" => $arParams["PRICE_CODE"],
			"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
			"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

			"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],

			"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
			"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
			"PAGER_TITLE" => $arParams["PAGER_TITLE"],
			"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
			"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
			"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
			"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
			"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],


			"SECTION_ID" => $section,
			"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
			"SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
			"DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["element"],

		),
		$component
	); ?>
	</div>
	<? if ($_GET["ajax_mode"] !== 'y') : ?>
		<p data-block='2' class="catalog-page__text">Шапочки, кепки и шляпы Lassie® защищают круглый год. Выбирайте
			подходящий головной убор: шляпку с полями или кепку с козырьком на лето, тоненькую шапочку без подкладки на
			осень или весну, и шапку с подкладкой из флиса или джерси на зиму. Многие наши
			шапочки имеют специальные ветронепроницаемые вставки в области ушей для дополнительной защиты. Для самых
			маленьких лучшим выбором во время метели и снежной бури станут наши ветрозащитные зимние шапки или шапки из
			искусственного меха.</p><a href="javascript:void(0);" data-btn='2' data-text="Скрыть текст" class="js-block-show link text">Читать далее</a>
	<?
	endif; ?>

	<? if ($_GET["ajax_mode"] == 'y') {
		die();
	}
