<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Runsite</title>

	<meta name="description" content="">
	<meta name="generator" content="Runsite CMF">
	<meta name="author" content="ТОВ Рансайт">
	<meta name="copyright" lang="uk" content="ТОВ Рансайт">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="/assets/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/icons/runsite-icons/style.css">
</head>
<body>
	@yield('app')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="/assets/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
	<script src="/assets/node_modules/pace-js/pace.min.js"></script>

	<script>
		$(function() {
			$('[data-toggle="tooltip"]').tooltip();

			$('.js-btn-cursor-spot').each(function() {
				$(this).append('<span class="js-spot"></span>');
			});

			$('.js-btn-cursor-spot').on('mouseenter', function() {
				$(this).find('.js-spot').addClass('active');
			}).on('mouseleave', function() {
				$(this).find('.js-spot').removeClass('active');
			}).on('mousemove', function(event) {

				var offset = $(this).offset();
				var spot = $(this).find('.js-spot');
				var y = event.pageY - offset.top - (spot.width() / 2);
				var x = event.pageX - offset.left - (spot.width() / 2);



				spot.css({
					'top': y,
					'left': x
				});
			});
		});
	</script>

	<!-- BEGIN JIVOSITE CODE {literal} -->
	<script type='text/javascript'>
	(function(){ var widget_id = 'TD6AXbSZMT';var d=document;var w=window;function l(){
	var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
	<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
