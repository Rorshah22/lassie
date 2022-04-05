<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<nav class="header__nav navigation">
		<ul class="header__menu menu menu_width_full">

<?
$previousLevel = 0;
$count = 0;

foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < 2):?>
		<?=("</ul></div></li></ul></li>");?>
		<?$count = 0;?>
	<?endif?>
	
	<? if($arItem["TEXT"] !== "Распродажа") {
		$class = 	"menu__name";
	}else {
		$class = 	"header__sale-wrapper menu__name";
		$openSpan = "<span class='header__sale'> ";
		$closeSpan = "</span>";
	}?>

	<?if ( $arItem["DEPTH_LEVEL"] ==1):?>
	
		<li class="menu__item"><a href="<?=$arItem["LINK"]?>" class="<?= $class?>"><?=$openSpan.$arItem["TEXT"].$closeSpan?></a>
			<ul class="dropdown-menu">
				<li class="dropdown-menu__content">
						<div class="dropdown-menu__img">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/header-submenu-1.jpg" alt="девочка">
						</div>
						<div class="dropdown-menu__menu-col">
							<ul class="vertical-menu"> 
						
	<?elseif ( $arItem["DEPTH_LEVEL"] == 2):?>
		<?if ($count == 4) {
												echo '</li></ul></li></ul></div>
												<div class="dropdown-menu__menu-col">
												<ul class="vertical-menu"> ';
											}
											$count++;?>
		             <li class="vertical-menu__item"><span class="vertical-menu__name"><?=$arItem["TEXT"]?></span>
				          	<ul class="vertical-menu__submenu">
											
											
							
	<?else:?>
												<li class="vertical-menu__submenu-item"><a href="<?=$arItem["LINK"]?>" class="link vertical-menu__submenu-name"><?=$arItem["TEXT"]?></a>
													</li>
																					
	<?endif;?>
	
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?> 
	
<?endforeach;?>


		</ul>
		<button class="burger-btn header__nav-btn js-nav-btn"><span class="burger-btn__switch">Развернуть меню </span>
					</button>
					<div class="navigation__collapse">
						<ul class="navigation__collapse-menu vertical-menu">
							<?foreach($arResult as $arItem):?>
								<?if ( $arItem["DEPTH_LEVEL"] ==1):?>
							<li class="navigation__collapse-item vertical-menu__item"><a href="<?=$arItem["LINK"]?>"
									class="vertical-menu__name"><?=$arItem["TEXT"]?></a>
							</li>
							<?endif;?>
							<?endforeach;?>
						</ul>
					</div>
				
	</nav>

<? endif; ?>

