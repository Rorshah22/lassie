<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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



?>

<nav class="header__nav navigation">
	<ul class="header__menu menu menu_width_full">
		<?foreach ($arResult["SECTIONS"] as  $section) :?>
			
			<?if($section["NAME"] == "Распродажа")
			 {$class = "header__sale-wrapper ";
				$openSpan = "<span class='header__sale'> ";
				$closeSpan = "</span>";
			 } ?>

					<li class="menu__item"><a href="<?=$section["SECTION_PAGE_URL"]?>" class="<?=$class;?>menu__name"><?= $openSpan .$section["NAME"].$closeSpan ?></a>
								<ul class="dropdown-menu">
									<li class="dropdown-menu__content">
										<div class="dropdown-menu__img">
											<img src="<?= SITE_TEMPLATE_PATH?>/assets/images/header-submenu-1.jpg" alt="девочка">
										</div>
							
										<div class="dropdown-menu__menu-col">
											<ul class="vertical-menu">
											<?$i = 0;?>
											<?foreach ($section["SECTION"] as  $itemLevel1) : ?>
												
												<li class="vertical-menu__item">
													<?if(empty($itemLevel1["SECTION"])):?>
														<a href="<?=$itemLevel1["SECTION_PAGE_URL"]?>" class="vertical-menu__name"><?=$itemLevel1["NAME"]?></a>
														<?else:?>
													<span class="vertical-menu__name"><?=$itemLevel1["NAME"]?>
												</span>
												<?endif;?>
													<ul class="vertical-menu__submenu">
												
												
													<?foreach ($itemLevel1["SECTION"] as  $itemLevel2) :?>
														<li class="vertical-menu__submenu-item"><a href="<?=$itemLevel2["SECTION_PAGE_URL"]?>" class="link vertical-menu__submenu-name"><?=$itemLevel2["NAME"]?></a>
														</li>

														<?endforeach;?>
														<?if($i === 3): 
												
												break;?>
												<?endif; $i++;?>
													</ul>
												</li>
											
												<? endforeach;?>
											
											</ul>
										</div>

										<?if(count($section["SECTION"]) > 4):?>
										<div class="dropdown-menu__menu-col">
										<ul class="vertical-menu">
											<? $j = 0;

											foreach ($section["SECTION"] as  $itemLevel1) :?>
												<?$j++;
												if($j < 5){
													continue;
												}
												?>
											
												<li class="vertical-menu__item"><span class="vertical-menu__name"><?=$itemLevel1["NAME"]?></span>
													<ul class="vertical-menu__submenu">
														
												
													<?foreach ($itemLevel1["SECTION"] as  $itemLevel2) :?>
														<li class="vertical-menu__submenu-item"><a href="<?=$itemLevel2["SECTION_PAGE_URL"]?>" class="link vertical-menu__submenu-name"><?=$itemLevel2["NAME"]?></a>
														</li>

														<?endforeach;?>
													</ul>
												</li>
												<?endforeach;?>
											
											</ul>
										</div>
										<?endif;?>
									</li>
								</ul>
							</li>
				<?endforeach;?>
						</ul>
</nav>

			