@extends('layouts.app')

@section('content')
	<div class="bg-primary truncate">
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
								<a href="#" class="btn btn-primary btn-lg mr-3 js-btn-cursor-spot js-btn-cursor-spot-lighter"><small><i class="fas fa-calculator mr-2"></i>Розрахувати вартість сайту</small></a>
								<a href="#" class="btn btn-outline-secondary btn-lg js-btn-cursor-spot js-btn-cursor-spot-lighter"><small><i class="fas fa-envelope mr-2"></i>Напишіть нам</small></a>
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
	</div>
@endsection
