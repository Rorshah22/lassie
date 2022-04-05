<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>Text here....<?$APPLICATION->IncludeComponent(
	"custom:curs", 
	"template.php", 
	array(
		"COMPONENT_TEMPLATE" => "template.php"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>