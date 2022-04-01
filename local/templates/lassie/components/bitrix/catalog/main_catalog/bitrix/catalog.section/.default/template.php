<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!- "items"-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 * 
 * 
 */



$this->setFrameMode(true);
?>

<? if ($arParams["AJAX"] !== 'y') : ?>
  <div class="catalog__main">



    <div class="catalog__sort">
      <div class="catalog__sort-group"><span class="catalog__sort-text text">Сортировать по:</span>
        <select id="select_sort" name="sort" class="js-select select">
          <option value="popular">Популярности</option>
          <option value="price">Цене</option>
          <option value="new">Новизне</option>
          <option value="availibel">Наличию</option>
        </select>
      </div>
      <div class="catalog__sort-group"><span class="catalog__sort-text text">Отображать по:</span>
        <select id="count_page" name="display" class="js-select select">

          <option value="12">12</option>

          <option value="9">9</option>

          <option value="6">6</option>

          <option value="3">3</option>

        </select>
      </div>
    </div>

    <div class="catalog__goods-wrapper">
    <? endif; ?>
    <ul class="goods" data-section_id=<?= $arParams["SECTION_ID"] ?>>

      <? foreach ($arResult["ITEMS"] as  $arItem) : ?>


        <li class="goods__item">
          <article class="good">
            <div class="good__content">
              <a href="javascript:void(0);" class="good__link">

                <img src='<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>' alt="Товар" class="good__img" title="">
                <? if ($arItem["PROPERTIES"]["NEWPRODUCT"]["VALUE"]) : ?>
                  <span class="flag flag_type_new">new</span>
                <? elseif ($arItem["PROPERTIES"]["SALELEADER"]["VALUE"]) : ?>
                  <span class="flag flag flag_type_hit">hit</span>
                <? elseif ($arItem["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]) : ?>
                  <span class="flag flag_type_sale">sale</span>
                <? else : ?>

                <? endif; ?>
              </a><a href="javascript:void(0);" class="like">Мне нравится</a>
              <h4 class="good__name"><?= $arItem["NAME"] ?></h4>
              <div class="good__price-wrapper">

                <? //TODO изменить отображение скидок
                if ($arItem["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]) : ?>

                  <span class="good__price good__price_new"><?= $arItem["PRICES"]["BASE"]["DISCOUNT_VALUE_VAT"] ?> р.</span>
                  <span class="good__price good__price_old"><?= $arItem["PRICES"]["BASE"]["VALUE_VAT"] ?> р.</span>
                  <span class="good__discount">Скидка <?= $arItem["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"] ?>% </span>
                <? elseif ($arItem["PRICES"]["BASE"]["VALUE"]) : ?>
                  <span class="good__price"> <?= $arItem["PRICES"]["BASE"]["VALUE_VAT"] ?> р.</span>
                <? endif; ?>
              </div>
            </div>
            <div class="good__hover">
              <form method="post" action="" class="form good__order">
                <div class="good__order-row">
                  <label class="good__order-label">Выберите размер</label>
                  <? foreach ($arItem["PROPERTIES"]["SIZE"]["VALUE"] as $item) : ?>

                    <div class="checkbox-tile">
                      <input id="good0-size0" name="Good[size]" type="radio" value="<?= $item ?>" required class="checkbox-tile__elem">
                      <label for="good0-size0" class="checkbox-tile__label"><?= $item ?></label>
                    </div>
                  <? endforeach; ?>
                </div>
                <div class="good__order-row">
                  <label for="good0-num" class="good__order-label">Количество</label>
                  <div class="input-number">
                    <input id="good0-num" name="Good[number]" type="number" step="1" min="1" required class="input-number__elem">
                    <div class="input-number__counter"><span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn">Добавить в корзину</button>
              </form>
            </div>
          </article>
        </li>
      <? endforeach; ?>
      <li class="goods__item"></li>
      <li class="goods__item"></li>
      <!--В конце списка товаров нужно добавлять 2 пустых элемента для равномерного выравнивания элементов на любом разрешении экрана-->
    </ul>

    <? if ($arParams["AJAX"] !== 'y') : ?>
    </div>

    <? if (count($arResult["ITEMS"]) >= 12) : ?>
      <div class="catalog__more">
        <a href="javascript:void(0);" class="catalog__more-btn link">
          <span class="icon-load"></span>Загрузить еще 12 товаров</a>
        <a href="javascript:void(0);" class="link text">Показать все</a>
      </div>
    <? endif; ?>
  </div>
<? endif; ?>