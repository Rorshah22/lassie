<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<form method="post" action="" data-block='1' class="catalog-page__filter catalog__filter form">
	<fieldset class="form__fieldset">
		<legend class="form__title form__title_align_center">Фильтр</legend>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Сезон</label>
			<div class="checkbox">
				<input id="filter-season-1" name="Filter[season]" type="checkbox" value="winter" class="checkbox__elem">
				<label for="filter-season-1" class="checkbox__label form__label">Зима</label>
			</div>
			<div class="checkbox">
				<input id="filter-season-2" name="Filter[season]" type="checkbox" value="off-season" class="checkbox__elem">
				<label for="filter-season-2" class="checkbox__label form__label">Межсезонье</label>
			</div>
		</div>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Коллекция</label>
			<div class="checkbox">
				<input id="filter-collection-1" name="Filter[collection]" type="checkbox" value="newborn" disabled class="checkbox__elem">
				<label for="filter-collection-1" class="checkbox__label form__label">Newborn</label>
			</div>
			<div class="checkbox">
				<input id="filter-collection-2" name="Filter[collection]" type="checkbox" value="active" class="checkbox__elem">
				<label for="filter-collection-2" class="checkbox__label form__label">Active</label>
			</div>
			<div class="checkbox">
				<input id="filter-collection-3" name="Filter[collection]" type="checkbox" value="urban" disabled class="checkbox__elem">
				<label for="filter-collection-3" class="checkbox__label form__label">Urban</label>
			</div>
			<div class="checkbox">
				<input id="filter-collection-4" name="Filter[collection]" type="checkbox" value="lassie by reima" disabled class="checkbox__elem">
				<label for="filter-collection-4" class="checkbox__label form__label">Lassie by Reima</label>
			</div>
		</div>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Цвет</label>
			<div class="form__content-group">
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-1" name="Filter[color]" type="checkbox" value="green" class="checkbox-tile__elem">
					<label for="filter-color-1" class="checkbox-tile__label checkbox-tile__label_color_green checkbox-tile__label_type_color">Зеленый</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-2" name="Filter[color]" type="checkbox" value="pink" class="checkbox-tile__elem">
					<label for="filter-color-2" class="checkbox-tile__label checkbox-tile__label_color_pink checkbox-tile__label_type_color">Розовый</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-3" name="Filter[color]" type="checkbox" value="orange" class="checkbox-tile__elem">
					<label for="filter-color-3" class="checkbox-tile__label checkbox-tile__label_color_orange checkbox-tile__label_type_color">Оранжевый</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-4" name="Filter[color]" type="checkbox" value="dark blue" class="checkbox-tile__elem">
					<label for="filter-color-4" class="checkbox-tile__label checkbox-tile__label_color_dark-blue checkbox-tile__label_type_color">Темно-синий</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-5" name="Filter[color]" type="checkbox" value="light green" class="checkbox-tile__elem">
					<label for="filter-color-5" class="checkbox-tile__label checkbox-tile__label_color_light-green checkbox-tile__label_type_color">Салатовый</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-6" name="Filter[color]" type="checkbox" value="sand" class="checkbox-tile__elem">
					<label for="filter-color-6" class="checkbox-tile__label checkbox-tile__label_color_sand checkbox-tile__label_type_color">Песочный</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-7" name="Filter[color]" type="checkbox" value="red" class="checkbox-tile__elem">
					<label for="filter-color-7" class="checkbox-tile__label checkbox-tile__label_color_red checkbox-tile__label_type_color">Тёмно-красный</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-8" name="Filter[color]" type="checkbox" value="lilac" class="checkbox-tile__elem">
					<label for="filter-color-8" class="checkbox-tile__label checkbox-tile__label_color_lilac checkbox-tile__label_type_color">Сиреневый</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-color-9" name="Filter[color]" type="checkbox" value="blue" class="checkbox-tile__elem">
					<label for="filter-color-9" class="checkbox-tile__label checkbox-tile__label_color_blue checkbox-tile__label_type_color">Голубой</label>
				</div>
			</div>
		</div>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Пол</label>
			<div class="checkbox">
				<input id="filter-gender-1" name="Filter[gender]" type="checkbox" value="male" class="checkbox__elem">
				<label for="filter-gender-1" class="checkbox__label form__label">Мальчик</label>
			</div>
			<div class="checkbox">
				<input id="filter-gender-2" name="Filter[gender]" type="checkbox" value="female" class="checkbox__elem">
				<label for="filter-gender-2" class="checkbox__label form__label">Девочка</label>
			</div>
			<div class="checkbox">
				<input id="filter-gender-3" name="Filter[gender]" type="checkbox" value="unisex" class="checkbox__elem">
				<label for="filter-gender-3" class="checkbox__label form__label">Унисекс</label>
			</div>
		</div>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Размер</label>
			<div class="form__content-group">
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-1" name="Filter[size]" type="checkbox" value="50" class="checkbox-tile__elem">
					<label for="filter-size-1" class="checkbox-tile__label">50</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-2" name="Filter[size]" type="checkbox" value="56" class="checkbox-tile__elem">
					<label for="filter-size-2" class="checkbox-tile__label">56</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-3" name="Filter[size]" type="checkbox" value="62" class="checkbox-tile__elem">
					<label for="filter-size-3" class="checkbox-tile__label">62</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-4" name="Filter[size]" type="checkbox" value="68" class="checkbox-tile__elem">
					<label for="filter-size-4" class="checkbox-tile__label">68</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-5" name="Filter[size]" type="checkbox" value="74" class="checkbox-tile__elem">
					<label for="filter-size-5" class="checkbox-tile__label">74</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-6" name="Filter[size]" type="checkbox" value="80" class="checkbox-tile__elem">
					<label for="filter-size-6" class="checkbox-tile__label">80</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-7" name="Filter[size]" type="checkbox" value="86" class="checkbox-tile__elem">
					<label for="filter-size-7" class="checkbox-tile__label">86</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-8" name="Filter[size]" type="checkbox" value="92" class="checkbox-tile__elem">
					<label for="filter-size-8" class="checkbox-tile__label">92</label>
				</div>
				<div class="checkbox-tile checkbox-tile_size_big">
					<input id="filter-size-9" name="Filter[size]" type="checkbox" value="98" class="checkbox-tile__elem">
					<label for="filter-size-9" class="checkbox-tile__label">98</label>
				</div>
			</div>
		</div>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Наличие</label>
			<div class="checkbox">
				<input id="filter-availability-1" name="Filter[availability]" type="checkbox" value="available" class="checkbox__elem">
				<label for="filter-availability-1" class="checkbox__label form__label">В наличии</label>
			</div>
			<div class="checkbox">
				<input id="filter-availability-2" name="Filter[availability]" type="checkbox" value="order" class="checkbox__elem">
				<label for="filter-availability-2" class="checkbox__label form__label">Под заказ</label>
			</div>
		</div>
		<div class="form__row form__row_direction_column">
			<label class="form__label">Цена, руб.</label>
			<div class="range-slider">
				<input class="range-slider__elem" type="text">
				<div class="range-slider__output-row">
					<input name="Filter[price-min]" data-type="min" readonly class="input range-slider__output" type="text">
					<input name="Filter[price-max]" data-type="max" readonly class="input range-slider__output" type="text">
				</div>
			</div>
		</div>
		<button type="submit" class="btn">Показать товары</button>
	</fieldset>
</form>

<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<? echo CUtil::JSEscape($arResult["FORM_ACTION"]) ?>', '<?= CUtil::JSEscape($arParams["FILTER_VIEW_MODE"]) ?>', <?= CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"]) ?>);
</script>