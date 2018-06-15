@extends('layouts.app')

@section('content')
	<section class="bg-primary truncate">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 pt-4 pb-4">
					<div class="on-blind">
						<div class="row text-center text-lg-left">
							<div class="col-lg-8">
								<div class="pt-6 pb-6">
									<h1><b>Розробка професійних сайтів з ексклюзивним дизайном</b></h1>
									<p class="text-muted pt-3 pb-3">
										Сайт – це вітрина вашого бізнесу. Важливо, щоб вона була якісна та приваблива. Ми це забезпечимо.
									</p>
									<nav class="nav-clear">
										<ul>
											<li>
												<a href="#" class="btn btn-primary btn-lg mr-3 js-btn-cursor-spot js-btn-cursor-spot-lighter"><small><i class="fas fa-calculator mr-2"></i>Розрахувати вартість сайту</small></a>
											</li>
											<li>
												<a href="#" class="btn btn-outline-secondary btn-lg js-btn-cursor-spot js-btn-cursor-spot-lighter"><small><i class="fas fa-envelope mr-2"></i>Напишіть нам</small></a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-lg-4 pt-5">
								<img src="/assets/images/home.png" alt="">
							</div>
						</div>
					</div>

					<div class="blind body-bg to-left"></div>
					<div class="blind body-bg to-right d-lg-none"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="container">
		<h2 class="h4 section-title text-uppercase">
			<span class="number">01</span>
			<span>Що ми робимо</span>
		</h2>
		<nav class="service-nav pt-5">
			<ul class="row">
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-visit-card"></i>
						</span>
						<hr>
						<span class="service-item-title">Сайт-візитка</span>
						<span class="service-item-description">Вартість розробки <br>від 15 000 грн</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-corporate"></i>
						</span>
						<hr>
						<span class="service-item-title">Корпоративний сайт</span>
						<span class="service-item-description">Вартість розробки <br>від 15 000 грн</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-zmi"></i>
						</span>
						<hr>
						<span class="service-item-title">Сайт для ЗМІ</span>
						<span class="service-item-description">Вартість розробки <br>від 15 000 грн</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-corporate"></i>
						</span>
						<hr>
						<span class="service-item-title">Інтернет-магазин</span>
						<span class="service-item-description">Вартість розробки <br>від 50 000 грн</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-audit"></i>
						</span>
						<hr>
						<span class="service-item-title">Технічний аудит та підтримка</span>
						<span class="service-item-description">Вартість послуги договірна</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-seo"></i>
						</span>
						<hr>
						<span class="service-item-title">SEO аудит та оптимізація</span>
						<span class="service-item-description">Вартість послуги договірна</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-content"></i>
						</span>
						<hr>
						<span class="service-item-title">Наповнення контентом</span>
						<span class="service-item-description">Вартість послуги договірна</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
				<li class="col-md-6 col-lg-4 col-xl-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="icon-pz"></i>
						</span>
						<hr>
						<span class="service-item-title">Розробка ПЗ</span>
						<span class="service-item-description">Вартість послуги договірна</span>
						<span class="service-item-button js-btn-cursor-spot js-btn-cursor-spot-lighter">
							Детальніше
							<i class="icon-arrow-right"></i>
						</span>
					</a>
				</li>
			</ul>
		</nav>
	</section>

	<section class="container pt-6">
		<div class="row">
			<div class="col-lg-10">
				<div class="on-blind bg-primary pt-5 pb-5">
					<div class="pb-2">
						<h2 class="h4 section-title section-title-bg-primary text-uppercase">
							<span class="number">02</span>
							<span>Наші роботи</span>
						</h2>
					</div>
					
					<nav class="portfolio-carousel mb-4">
						<ul class="owl-carousel js-portfolio-carousel">
							@for($i=0; $i<30; $i++)
								<li>
									<a href="#">
										<span class="portfolio-carousel-info">
											<span class="portfolio-carousel-info-title">Порти України</span>
											<span class="portfolio-carousel-info-description">Найбільша база мешканців території України, народжених між 1650-1920-ми роками</span>
											<span class="portfolio-carousel-info-btn">Переглянути <i class="icon-arrow-right"></i></span>
										</span>
										<img data-src="https://loremflickr.com/360/400?{{ mt_rand() }}" class="portfolio-carousel-image owl-lazy" alt="">
									</a>
								</li>
							@endfor
							<li></li>
						</ul>

						<div class="portfolio-carousel-nav"></div>
					</nav>

					<a class="btn btn-light btn-lg pl-5 pr-5 js-btn-cursor-spot js-btn-cursor-spot-dark" href="#">
						<small>Усі роботи <i class="icon-arrow-right"></i></small>
					</a>
				</div>
				<div class="blind bg-primary to-left"></div>
			</div>
		</div>
	</section>
@endsection
