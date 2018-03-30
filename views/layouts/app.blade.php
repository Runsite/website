@extends('layouts.resources')

@section('app')

	<header class="bg-primary truncate">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10">
					<div class="on-blind">
						<nav class="navbar navbar-expand-lg navbar-light bg-white pl-0">
							<a class="navbar-brand text-uppercase text-primary" href="/"><b>Run</b>site</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Перемкнути навігацію">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="mainNav" aria-label="Навігація по сайту">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="#">Що ми робимо</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Портфоліо</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Особливості</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Наші клієнти</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Контакти</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="blind bg-white to-left"></div>
					<div class="blind bg-white to-right d-lg-none"></div>
				</div>
				<div class="col-lg-2 pl-0 hidden d-none d-lg-block">
					<a href="#" class="btn btn-dark btn-lg btn-block btn-header js-btn-cursor-spot js-btn-cursor-spot-light"><i class="fa fa-edit"></i> Бриф</a>
				</div>
			</div>
		</div>
	</header>

	<main>
		@yield('content')
	</main>

	<footer class="bg-dark text-white">
		<div class="container pt-5 pb-6">
			<div class="row">
				<div class="col-md-4">
					<section class="pr-lg-6">
						<h2 class="footer-h"><span>Що ми робимо</span></h2>
						<nav class="nav-footer mt-4">
							<menu type="toolbar">
								<li><a href="#">Сайт-візитка</a></li>
								<li><a href="#">Корпоративний сайт</a></li>
								<li><a href="#">Сайт для ЗМІ</a></li>
								<li><a href="#">Інтернет-магазин</a></li>
								<li><a href="#">Технічний аудит</a></li>
								<li><a href="#">SEO аудит</a></li>
								<li><a href="#">Технічна підтримка</a></li>
								<li><a href="#">Наповнення контентом</a></li>
								<li><a href="#">Хостинг</a></li>
								<li><a href="#">SEO оптимізація</a></li>
								<li><a href="#">Розробка ПЗ</a></li>
							</menu>
						</nav>
					</section>
				</div>
				<div class="col-md-4 pt-5 pt-md-0">
					<div class="pl-lg-5 pr-lg-5">
						<section>
							<h2 class="footer-h"><span>Наш блог</span></h2>
							<nav class="nav-footer mt-4">
								<menu type="toolbar">
									<li><a href="#">Переваги Angular</a></li>
									<li><a href="#">Недоліки Wordpress</a></li>
									<li><a href="#">Нові технології адаптації</a></li>
									<li><a href="#">Інтернет-магазин з нуля</a></li>
								</menu>
							</nav>
						</section>
						<section>
							<h2 class="footer-h mt-5"><span>Потенційним клієнтам</span></h2>
							<nav class="nav-footer mt-3">
								<menu type="toolbar">
									<li><a href="#">Розрахувати вартість сайту</a></li>
									<li><a href="#">Задати питання</a></li>
									<li><a href="#">Заповнити бриф</a></li>
									<li><a href="#">Зв’язатись з нами</a></li>
								</menu>
							</nav>
						</section>
					</div>
				</div>
				<div class="col-md-4 pt-5 pt-md-0">
					<div class="pl-lg-6">
						<h2 class="footer-h"><span>Контакти</span></h2>
						<nav class="nav-footer mt-4">
							<menu type="toolbar">
								<li class="has-icons mt-4">
									<span class="nav-footer-icon">
										<i class="fas fa-map-marker-alt"></i>
									</span>
									<span>
										вул. Саксаганського 53/80 <br>
										м. Київ, Україна
									</span>
								</li>
								<li class="has-icons mt-3">
									<span class="nav-footer-icon">
										<i class="fas fa-phone"></i>
									</span>
									<span>
										<a href="tel:+380634242623" data-toggle="tooltip" title="Зателефонувати зараз" class="p-0 d-inline">38 (063) 42 42 623</a><br>
										<a href="tel:+380730089771" data-toggle="tooltip" title="Зателефонувати зараз" class="p-0 d-inline">38 (073) 00 89 771</a>
									</span>
								</li>
								<li class="has-icons mt-3">
									<span class="nav-footer-icon">
										<i class="fas fa-envelope"></i>
									</span>
									<span>
										<a href="mailto:info@runsite.com.ua" data-toggle="tooltip" title="Написати зараз" class="p-0 d-inline">info@runsite.com.ua</a><br>
										<a href="mailto:pr@runsite.com.ua" data-toggle="tooltip" title="Написати зараз" class="p-0 d-inline">pr@runsite.com.ua</a>
									</span>
								</li>
							</menu>
						</nav>

						<p class="pt-4 pb-4 mb-0">
							<a href="#" data-toggle="tooltip" title="Наша сторінка на Facebook" rel="nofollow" target="_blank" class="btn btn-lg btn-block btn-primary js-btn-cursor-spot js-btn-cursor-spot-light"><small><i class="fab fa-facebook"></i> Facebook</small></a>
						</p>

						<p class="text-muted">© Copyright 2016-{{ date('Y') }} Рансайт ТОВ</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
@endsection
