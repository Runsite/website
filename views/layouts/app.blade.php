@extends('layouts.resources')

@section('app')

	<div class="bg-primary">
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
				</div>
				<div class="col-lg-2 pl-0 hidden d-none d-lg-block">
					<a href="#" class="btn btn-dark btn-lg btn-block btn-header"><i class="fa fa-edit"></i> Бриф</a>
				</div>
			</div>
		</div>
	</div>

	@yield('content')
@endsection
