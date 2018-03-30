@extends('layouts.resources')

@section('app')

	<div class="bg-primary truncate">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10">
					<div class="on-blind">
						<nav class="navbar navbar-expand-lg navbar-light bg-white pl-0">
							<a class="navbar-brand text-uppercase text-primary" href="/"><b>Run</b>site</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="mainNav">
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
	</div>

	@yield('content')

	<footer class="bg-dark text-white">
		<div class="container pt-5 pb-6">
			<div class="row">
				<div class="col-lg-4 pr-6">
					<h2 class="footer-h"><span>Що ми робимо</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla sint culpa vel similique eveniet repudiandae id consequuntur at velit quisquam! Fugiat autem architecto praesentium amet ad a fuga recusandae sed.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla sint culpa vel similique eveniet repudiandae id consequuntur at velit quisquam! Fugiat autem architecto praesentium amet ad a fuga recusandae sed.</p>
				</div>
				<div class="col-lg-4 pl-5 pr-5">
					<h2 class="footer-h"><span>Наш блог</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla sint culpa vel similique eveniet repudiandae id consequuntur at velit quisquam! Fugiat autem architecto praesentium amet ad a fuga recusandae sed.</p>
					<h2 class="footer-h mt-5"><span>Потенційним клієнтам</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse iste eveniet natus id impedit velit error mollitia, dolores deleniti, vitae asperiores nisi minus veniam fugiat, tempora animi debitis laborum maiores.</p>
				</div>
				<div class="col-lg-4 pl-6">
					<h2 class="footer-h"><span>Контакти</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla sint culpa vel similique eveniet repudiandae id consequuntur at velit quisquam! Fugiat autem architecto praesentium amet ad a fuga recusandae sed.</p>

					<p class="pt-3 pb-3">
						<a href="#" rel="nofollow" target="_blank" class="btn btn-lg btn-block btn-primary js-btn-cursor-spot js-btn-cursor-spot-light"><small><i class="fab fa-facebook"></i> Facebook</small></a>
					</p>

					<p class="text-muted">© Copyright 2016-{{ date('Y') }} Рансайт ТОВ</p>
				</div>
			</div>
		</div>
	</footer>
@endsection
