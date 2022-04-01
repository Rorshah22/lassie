<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
// $arParams["ELEMENT_SORT_ORDER"] = 'desc';

// $link = str_replace("/".$arResult['VARIABLES']['SECTION_CODE'],'',$arResult["VARIABLES"]["SECTION_CODE_PATH"]);


$list = CIBlockSection::GetNavChain(false, $arResult["VARIABLES"]["SECTION_ID"], array(), true);
foreach ($list as $arSectionPath) {
	$rootSection[] = $arSectionPath["NAME"];
	
}

if ($rootSection[0] && $rootSection[1]) {
	//добавляем в цепочку навигации
	$APPLICATION->AddChainItem("$rootSection[0]", "" );
}
$this->setFrameMode(true);
?>

<h1><? $APPLICATION->ShowTitle() ?></h1>
	
<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									".default",
									Array(
										"AREA_FILE_SHOW" => "file",
										"COMPONENT_TEMPLATE" => ".default",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/local/templates/lassie/include/section/header_paragraph.php"
									)
								);
								?>


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



	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		"",
		array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"AJAX" => $_GET["ajax_mode"],
			"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
			"SET_TITLE" => 'N',

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

			"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
			"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
			"SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
			"DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["element"],
		),
		$component
	); ?>
</div>

<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									".default",
									Array(
										"AREA_FILE_SHOW" => "file",
										"COMPONENT_TEMPLATE" => ".default",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/local/templates/lassie/include/section/footer_paragraph.php"
									)
								);
								
								?>
<a href="javascript:void(0);" data-btn='2' data-text="Скрыть текст" class="js-block-show link text">Читать далее</a>