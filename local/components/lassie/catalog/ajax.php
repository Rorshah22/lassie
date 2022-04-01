<?
if (!defined("B_PROLOG_INCLUDED") && B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Engine\Controller;

class AjaxClass extends Controller
{
  public function getElementAction()
  {
    $catalog = '<h1>TEST</h1>';
    return $catalog;
  }
}
