<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arStructured = [];
$sectionLink = [];
$arStructured['ROOT'] = [];
$sectionLink[0] = &$arStructured['ROOT'];

foreach ($arResult['SECTIONS'] as $arSection) {

$sectionLink[intval($arSection['IBLOCK_SECTION_ID'])]['SECTION'][$arSection['ID']] = $arSection;
$sectionLink[$arSection['ID']] = &$sectionLink[intval($arSection['IBLOCK_SECTION_ID'])]['SECTION'][$arSection['ID']];

}

$arResult["SECTIONS"] = $arStructured["ROOT"]["SECTION"];
