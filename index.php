<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("LASSIE - каталог");
?><div class="index__slider slider">
	<ul class="slider__container">
		<li class="slider__item"> <img src="/local/templates/lassie/assets/images/slider-1.jpg" alt="" class=" slider__img">
			<div class="index__slider-title">
				Встречаем осень <br>
				с новой коллекцией
			</div>
		</li>
		<li class="slider__item"> <img src="/local/templates/lassie/assets/images/slider-1.jpg" alt="" class="slider__img">
			<div class="index__slider-title">
				Встречаем осень <br>
				с новой коллекцией
			</div>
		</li>
	</ul>
</div>
<section class="popular">
	<div class="container">
		<h1 class="heading"><span class="heading__text">Популярные товары</span></h1>
		<ul class="goods">
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-1.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_new">new</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Шапка-бини для новорожденных Hilal</h4>
						<div class="good__price-wrapper">
							<span class="good__price">1 599 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good0-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good0-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good0-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good0-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good0-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good0-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good0-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good0-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good0-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good0-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good0-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good0-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-2.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_sale">sale</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Зимний комбинезон для новорожденных Grian</h4>
						<div class="good__price-wrapper">
							<span class="good__price good__price_new">2 899 р.</span><span class="good__price good__price_old">3 899 р.</span><span class="good__discount">Скидка 30%</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good1-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good1-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good1-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good1-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good1-size2" name="Good[size]" type="radio" value="86" required="" disabled="" class="checkbox-tile__elem"> <label for="good1-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good1-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good1-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good1-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good1-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good1-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good1-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-3.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_new">new</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Кросовки Reimatec® для детей Wetter</h4>
						<div class="good__price-wrapper">
							<span class="good__price">3 299 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good2-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good2-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good2-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good2-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good2-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good2-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good2-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good2-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good2-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good2-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good2-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good2-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-4.jpg" alt="Товар" class="good__img" title=""> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Детская зимняя куртка Reimatec® Dinkar</h4>
						<div class="good__price-wrapper">
							<span class="good__price">3 899 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good3-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good3-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good3-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good3-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good3-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good3-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good3-size3" name="Good[size]" type="radio" value="92" required="" disabled="" class="checkbox-tile__elem"> <label for="good3-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good3-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good3-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good3-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good3-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-5.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_hit">hit</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Пинетки для новорожденных Neuvo</h4>
						<div class="good__price-wrapper">
							<span class="good__price">849 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good4-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good4-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good4-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good4-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good4-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good4-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good4-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good4-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good4-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good4-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good4-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good4-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-1.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_new">new</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Шапка-бини для новорожденных Hilal</h4>
						<div class="good__price-wrapper">
							<span class="good__price">1 599 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good5-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good5-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good5-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good5-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good5-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good5-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good5-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good5-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good5-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good5-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good5-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good5-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-2.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_sale">sale</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Зимний комбинезон для новорожденных Grian</h4>
						<div class="good__price-wrapper">
							<span class="good__price good__price_new">2 899 р.</span><span class="good__price good__price_old">3 899 р.</span><span class="good__discount">Скидка 30%</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good6-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good6-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good6-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good6-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good6-size2" name="Good[size]" type="radio" value="86" required="" disabled="" class="checkbox-tile__elem"> <label for="good6-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good6-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good6-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good6-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good6-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good6-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good6-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-3.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_new">new</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Кросовки Reimatec® для детей Wetter</h4>
						<div class="good__price-wrapper">
							<span class="good__price">3 299 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good7-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good7-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good7-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good7-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good7-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good7-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good7-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good7-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good7-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good7-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good7-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good7-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-4.jpg" alt="Товар" class="good__img" title=""> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Детская зимняя куртка Reimatec® Dinkar</h4>
						<div class="good__price-wrapper">
							<span class="good__price">3 899 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good8-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good8-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good8-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good8-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good8-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good8-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good8-size3" name="Good[size]" type="radio" value="92" required="" disabled="" class="checkbox-tile__elem"> <label for="good8-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good8-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good8-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good8-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good8-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item">
				<article class="good">
					<div class="good__content">
						<a href="javascript:void(0);" class="good__link"> <img src="/local/templates/lassie/assets/images/good-5.jpg" alt="Товар" class="good__img" title=""><span class="flag flag_type_hit">hit</span> </a><a href="javascript:void(0);" class="like">Мне нравится</a>
						<h4 class="good__name">Пинетки для новорожденных Neuvo</h4>
						<div class="good__price-wrapper">
							<span class="good__price">849 р.</span>
						</div>
					</div>
					<div class="good__hover">
						<form method="post" action="" class="form good__order">
							<div class="good__order-row">
								<label class="good__order-label">Выберите размер</label>
								<div class="checkbox-tile">
									<input id="good9-size0" name="Good[size]" type="radio" value="74" required="" class="checkbox-tile__elem"> <label for="good9-size0" class="checkbox-tile__label">74</label>
								</div>
								<div class="checkbox-tile">
									<input id="good9-size1" name="Good[size]" type="radio" value="80" required="" class="checkbox-tile__elem"> <label for="good9-size1" class="checkbox-tile__label">80</label>
								</div>
								<div class="checkbox-tile">
									<input id="good9-size2" name="Good[size]" type="radio" value="86" required="" class="checkbox-tile__elem"> <label for="good9-size2" class="checkbox-tile__label">86</label>
								</div>
								<div class="checkbox-tile">
									<input id="good9-size3" name="Good[size]" type="radio" value="92" required="" class="checkbox-tile__elem"> <label for="good9-size3" class="checkbox-tile__label">92</label>
								</div>
								<div class="checkbox-tile">
									<input id="good9-size4" name="Good[size]" type="radio" value="98" required="" class="checkbox-tile__elem"> <label for="good9-size4" class="checkbox-tile__label">98</label>
								</div>
							</div>
							<div class="good__order-row">
								<label for="good9-num" class="good__order-label">Количество</label>
								<div class="input-number">
									<input id="good9-num" name="Good[number]" type="number" step="1" min="1" required="" class="input-number__elem">
									<div class="input-number__counter">
										<span class="input-number__counter-spin input-number__counter-spin_more">Больше</span><span class="input-number__counter-spin input-number__counter-spin_less">Меньше</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Добавить в корзину</button>
						</form>
					</div>
				</article>
			</li>
			<li class="goods__item"></li>
			<li class="goods__item"></li>
			<!--В конце списка товаров нужно добавлять 2 пустых элемента для равномерного выравнивания элементов на любом разрешении экрана-->
		</ul>

	</div>
</section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>