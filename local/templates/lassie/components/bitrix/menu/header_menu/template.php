<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul class="header__top-menu menu">
	<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<li class="menu__item"><a href="<?=$arItem["LINK"]?>" class="link menu__name"><?=$arItem["TEXT"]?></a></li>
	
<?endforeach?>

</ul>
<?endif?>