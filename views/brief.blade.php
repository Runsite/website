@extends('layouts.app')

@section('header-bg', 'bg-white')

@section('header-btn')
	<a href="/" class="btn btn-primary btn-lg btn-block btn-header js-btn-cursor-spot js-btn-cursor-spot-light" rel="prefetch"><i class="fas fa-home"></i> На головну</a>
@endsection

@section('content')
	<section class="body-bg text-white">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 pt-4 pb-5">
					<div class="on-blind">
						<div class="pt-6 pb-7">
							<div class="row">
								<div class="col-md-6">
									<h1 class="h2 mb-4"><i class="fas fa-edit"></i> <b>Бриф</b></h1>
									<div class="text-gray">
										<p><small>Для більш детального і точного аналізу ваших цілей, побажань та вимог пропонуємо заповнити бриф (технічне завдання) на створення сайту. Це дозволяє зекономити  і Ваш і наш час.</small></p>

										<p><small>Ретельно оформлене технічне завдання є однією із запорук успішно реалізованого проекту.</small></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="blind bg-dark to-left"></div>
				</div>
			</div>
		</div>
	</section>
	<div class="bg-dark">
		<div class="container pl-0 pr-0">
			<div class="col-lg-11 pl-0">
				<div class="bg-white p-3 brief-container">
					<section>
						<h2 class="h5 text-primary pb-4 pt-4"><b>Про компанію</b></h2>
						<div class="row">
							<div class="col-lg-6">
								<label for="name">Назва компанії</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control" placeholder="Наприклад: ТОВ Рансайт">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="address">Адреса компанії</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="address" id="address" type="text" class="form-control" placeholder="Наприклад: вул. Саксаганського 53/80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="phone">Телефон</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="phone" id="phone" type="text" class="form-control" placeholder="Наприклад: 380634242623">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="contact_person_name">Контактна особа</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="contact_person_name" id="contact_person_name" type="text" class="form-control" placeholder="Наприклад: Ярослав">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="activity">Сфера діяльності компанії</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="activity" id="activity" type="text" class="form-control" placeholder="Наприклад: Розробка програмного забезпечення">
								</div>
							</div>
						</div>

						<hr>
					</section>

					<section>
						<h2 class="h5 text-primary pb-4 pt-4"><b>Маркетинг</b></h2>
						<div class="row">
							<div class="col-lg-6">
								<label for="name">Цілі створення сайту <br>(які практичні результати ставите перед собою)</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control" placeholder="Наприклад: ТОВ Рансайт">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="name">Клієнти, цільова аудиторія (вкажіть, які шари населення являються вашою аудиторією, їх статевовікову структуру, рівень прибутку і т.д.)</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<textarea name="" class="form-control" placeholder="Наприклад: ТОВ Рансайт"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="name">Географія реалізації товарів та послуг</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control" placeholder="Наприклад: ТОВ Рансайт">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<label for="name">Основні конкуренти</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control" placeholder="Наприклад: ТОВ Рансайт">
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection
