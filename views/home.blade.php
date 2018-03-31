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
		<h1 class="h4 section-title text-uppercase">
			<span class="number">01</span>
			<span>Що ми робимо</span>
		</h1>
		<nav class="service-nav pt-5">
			<ul class="row">
				<li class="col-lg-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="far fa-address-card"></i>
						</span>
						<hr>
						<span class="service-item-title">Сайт-візитка</span>
						<span clas="service-item-description">Вартість розробки від 15 000 грн</span>
					</a>
				</li>
				<li class="col-lg-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="far fa-building"></i>
						</span>
						<hr>
						<span class="service-item-title">Корпоративний сайт</span>
						<span clas="service-item-description">Вартість розробки від 15 000 грн</span>
					</a>
				</li>
				<li class="col-lg-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="far fa-newspaper"></i>
						</span>
						<hr>
						<span class="service-item-title">Сайт для ЗМІ</span>
						<span clas="service-item-description">Вартість розробки від 15 000 грн</span>
					</a>
				</li>
				<li class="col-lg-3">
					<a href="#" class="service-item">
						<span class="service-item-icon">
							<i class="fas fa-shopping-cart"></i>
						</span>
						<hr>
						<span class="service-item-title">Сайт-візитка</span>
						<span clas="service-item-description">Вартість розробки від 15 000 грн</span>
					</a>
				</li>
			</ul>
		</nav>
	</section>
@endsection
