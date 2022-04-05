<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Page\Asset;
?>

</main>
<footer class="footer">
	<div class="container footer__container">
		<div class="footer__col">
			<h3 class="footer__title">Покупки</h3>
			<? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"COMPONENT_TEMPLATE" => "bottom_menu",
		"ROOT_MENU_TYPE" => "bottom_ shopping",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
); ?>
		</div>
		<div class="footer__col">
			<h3 class="footer__title">Lassie</h3>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom_menu",
				array(
					"COMPONENT_TEMPLATE" => "bottom_menu",
					"ROOT_MENU_TYPE" => "bottom_ about",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				),
				false
			); ?>
		</div>
		<div class="footer__col">
			<h3 class="footer__title">Lassie клуб</h3>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom_menu",
				array(
					"COMPONENT_TEMPLATE" => "bottom_menu",
					"ROOT_MENU_TYPE" => "bottom_club",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				),
				false
			); ?>
		</div>
		<div class="footer__col">
			<h3 class="footer__title">Социальные сети</h3>
			<ul class="footer__socials socials">
				<li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_vk"><span class="icon-vkontakte"></span></a>
				</li>
				<li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_ok"><span class="icon-odnoklassniki"></span></a>
				</li>
				<li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_fb"><span class="icon-facebook"></span></a>
				</li>
				<li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_tw"><span class="icon-twitter-bird"></span></a>
				</li>
			</ul>
			<p class="footer__text">Следи за новостями и акциями
				<br>в социальных сетях. Будь первым!
			</p>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container footer__container">
			<div class="footer__bottom-col">

				<? $APPLICATION->IncludeFile(
					SITE_DIR . "include/contacts/copyright.php",
					["FOOTER" => "Y"],
					["MODE" => 'text']
				); ?>
			</div>
			<div class="footer__bottom-col">
				<div class="footer__text-group">
					<? $APPLICATION->IncludeFile(
						SITE_DIR . "include/contacts/contacts_alltime.php",
						["FOOTER" => "Y"],
						["MODE" => 'text']
					); ?>
					<span class="footer__text">(горячая линия)</span>
				</div>
				<div class="footer__text-group">
					<? $APPLICATION->IncludeFile(
						SITE_DIR . "include/contacts/contacts_evryday.php",
						["FOOTER" => "Y"],
						["MODE" => 'text']
					); ?>
					<span class="footer__text">(ежедневно с 9:00 до 24:00)</span>
				</div> <? $APPLICATION->IncludeFile(
									SITE_DIR . "include/contacts/email.php",
									["FOOTER" => "Y"],
									["MODE" => 'text']
								); ?>
			</div>
		</div>
	</div>
</footer>
<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/scripts/app.min.js");
?>
</div>
</body>

</html>