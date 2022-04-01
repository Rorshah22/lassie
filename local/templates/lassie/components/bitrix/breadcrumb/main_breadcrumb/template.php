<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';


$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	// $arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');
	
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		
		$strReturn .= 
		'<li class="breadcrumbs__item"><a href="/" class="breadcrumbs__name">'.$title.'</a>
		</li>';
	
	}
	else
	{
		$strReturn .=
			'<li class="breadcrumbs__item"><a href="'.$arResult[$index]["LINK"].'" class="breadcrumbs__name">'.$title.'</a>
			</li>';
	
	}
}


return $strReturn;
