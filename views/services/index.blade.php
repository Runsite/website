@extends('layouts.app')

@section('header-btn')
	<a href="/brief" class="btn btn-dark btn-lg btn-block btn-header js-btn-cursor-spot js-btn-cursor-spot-light" rel="prefetch"><i class="fa fa-edit"></i> Бриф</a>
@endsection

@section('content')

	<section class="container pt-5">
		<h2 class="h4 section-title text-uppercase">
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
@endsection
