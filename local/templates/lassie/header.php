<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Page\Asset;
?>

<? $bIsMainPage = $APPLICATION->GetCurPage(false)  == SITE_DIR; ?>
<!DOCTYPE html>

<head>
	<title> <? $APPLICATION->ShowTitle(); ?></title>

	<? $APPLICATION->ShowHead(); ?>
	<? Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">'); ?>
	<? Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">'); ?>
	<? Asset::getInstance()->addString('<meta name="imagetoolbar" content="no">'); ?>
	<? Asset::getInstance()->addString('<meta name="msthemecompatible" content="no">'); ?>
	<? Asset::getInstance()->addString('<meta name="cleartype" content="on">'); ?>
	<? Asset::getInstance()->addString('<meta name="HandheldFriendly" content="True">'); ?>
	<? Asset::getInstance()->addString('<meta name="format-detection" content="telephone=no">'); ?>
	<? Asset::getInstance()->addString('<meta name="format-detection" content="address=no">'); ?>
	<? Asset::getInstance()->addString('<meta name="google" value="notranslate">'); ?>
	<? Asset::getInstance()->addString('<meta name="apple-mobile-web-app-capable" content="yes">'); ?>
	<? Asset::getInstance()->addString('<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">'); ?>
	<? Asset::getInstance()->addString('<meta name="application-name" content="">'); ?>
	<? Asset::getInstance()->addString('<meta name="msapplication-tooltip" content="">'); ?>

	<? Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin,cyrillic" rel="stylesheet">'); ?>

	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/styles/app.min.css"); ?>


</head>


<body>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<div id="body">


		<header class="header">
			<div class="header__top">
				<div class="container header__container header__container_top">
					<div class="header__col header__col_top-left"><span class="header__icon icon-mail"></span><a href="javascript:void(0);" class="link">Подписаться</a>
					</div>
					<div class="header__col header__col_top-right">
						<? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "header_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
); ?>

						<? $APPLICATION->IncludeComponent(
							"bitrix:search.form",
							"head_search",
							array(
								"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
								"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
							),
							false
						); ?>

					</div>
				</div>
			</div>
			<div class="header__middle">
				<div class="container header__container header__container_middle">
					<div class="header__col header__col_logo">
						<a href="/" class="header__logo logo">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" class="logo__img" alt="">
						</a>
					</div>

					<div class="header__contacts">
						<span class="header__icon icon-comment"></span>
						<div class="header__col header__col_contacts">
							<div class="contacts">
								<? $APPLICATION->IncludeFile(
									SITE_DIR . "include/contacts/contacts_evryday.php",
									[],
									["MODE" => 'text']
								); ?>

								<div class="contacts__info">
									с 9:00 до 24:00 ежедневно
								</div>
							</div>
						</div>
						<div class="header__col header__col_contacts">
							<div class="contacts">
								<? $APPLICATION->IncludeFile(
									SITE_DIR . "include/contacts/contacts_alltime.php",
									[],
									["MODE" => 'text']
								); ?>

								<div class="contacts__info">
									24 часа 7 дней в неделю
								</div>
							</div>
						</div>
						<div class="header__col header__col_contacts">
							<a href="javascript:void(0);" class="link">Контактная информация</a>
						</div>
					</div>





					<div class="header__col header__col_basket"><span class="header__icon icon-bag"></span>
						<div class="header__basket">
							<div class="text">В вашей корзине</div><a href="javascript:void(0);" class="link">4 товара на 25 196 руб.</a>
						</div>
					</div>
				</div>
			</div>
			<div class="header__bottom">
				<div class="container">

					<? /*$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"header_main_menu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "main",
							"COMPONENT_TEMPLATE" => "header_main_menu",
							"DELAY" => "N",
							"MAX_LEVEL" => "3",
							"MENU_CACHE_GET_VARS" => array(),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "main",
							"USE_EXT" => "Y"
						),
						false
					); */ ?>
					<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"main_section.list", 
	array(
		"COMPONENT_TEMPLATE" => "main_section.list",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"TOP_DEPTH" => "3",
		"SECTION_FIELDS" => array(
			0 => "ID",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "sectionsFilter",
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "/#IBLOCK_CODE#/#SECTION_CODE_PATH#/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"CACHE_FILTER" => "N",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
); ?>
				</div>
			</div>
		</header>
		<main class="content catalog-page">
			<div class="container">
				<? if (!$bIsMainPage) : ?>
					<ul class="breadcrumbs">

						<? $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"main_breadcrumb", 
	array(
		"COMPONENT_TEMPLATE" => "main_breadcrumb",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
); ?>
					</ul>
				<? endif; ?>