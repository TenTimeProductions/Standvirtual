<?php 
	$copyYear = 2014; 
	$curYear = date('Y'); 
	$direitos = $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?>

<!-- FOOTER -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<hr class="hr-footer" style="margin: 20px 0">
					<div class="col-md-4">
						<center>
							<i class="fa fa-car fa-5x"></i>
							<br>
							<h4 class="footertext">Compre</h4>
							<p class="footertext">O Nosso site disponibiliza uma grande variadade de carros tanto novos como usados! <br>Faça a sua Escolha!<br>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<i class="fa fa-dollar fa-5x"></i>
							<br>
							<h4 class="footertext">Venda</h4>
							<p class="footertext">Disponibilizamos de um serviço de anuncios especializados para o seu carro ou outro veiculo a motor! <br>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<i class="fa fa-adn fa-5x"></i>
							<br>
							<h4 class="footertext">Publique</h4>
							<p class="footertext">De-se a conhecer, a sua empresa ou qualquer outro serviço é sempre Bem-Vindo!<br>
						</center>
					</div>
				</div>
				<hr class="hr-footer">
				<p class="navbar-text pull-left">
					&copy; <?php echo $direitos; ?> Company, Inc. &middot; <strong><a href="#">TenTimeProductions</a></strong>
					&middot; <a href="#" target="_blank">Privacy</a> 
					&middot; <a href="#" target="_blank">Terms</a> 
					&middot; <a href="#" target="_blank">Administrador</a>
				</p>
				<p class="navbar-text pull-right">
					<a class="btn btn-social-icon btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
					<a class="btn btn-social-icon btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
					<a class="btn btn-social-icon btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
				</p>
			</div>
		</div>
<!-- Go to top button -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Ir para o topo" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>
			if (!window.jQuery) {
				var jq = document.createElement('script'); jq.type = 'text/javascript';
				// Path to jquery.js file, eg. Google hosted version
				jq.src = 'public/js/jquery-1.10.2.min.js';
				document.getElementsByTagName('head')[0].appendChild(jq);
			}
		</script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="public/js/bootstrap.min.js"></script>

		<!-- Versão base do timeago -->
		<script src="public/plugins/jquery.timeago.js" type="text/javascript"></script>

		<!-- Versão portuguesa do timeago 
		<script src="public/jquery/jquery.timeago.pt.js" type="text/javascript"></script>-->

		<!-- Versão base dos sliders -->
		<script src="public/plugins/ion.rangeSlider.js" type="text/javascript"></script>
		<!-- Versão base do fancybox -->
		<script src="public/plugins/jquery.fancybox.js" type="text/javascript"></script>
		<!-- Select2 search-bar -->
		<script src="public/plugins/select2.js" type="text/javascript"></script>

		<!-- Details.php -->
		<script src="public/plugins/panels.js" type="text/javascript"></script>
		<!-- Search-bar -->
		<script src="public/plugins/search.js" type="text/javascript"></script>

		<script>
			$(function () {
				$("[data-toggle='tooltip']").tooltip();
				$("[data-toggle='popover']").popover();
				$("time.timeago").timeago();
				$('.carousel').carousel({
					interval: false
				});
				$(window).scroll(function () {
					if ($(window).scrollTop() > 155) {
						$('#menu-bar nav').addClass('navbar-fixed-top container');
						$('#menu-bar-replace').addClass('menu-bar-replace-fixed');
					}

					if ($(window).scrollTop() < 156) {
						$('#menu-bar nav').removeClass('navbar-fixed-top container');
						$('#menu-bar-replace').removeClass('menu-bar-replace-fixed');
					}
				});
				$(window).scroll(function () {
					if ($(this).scrollTop() > 150) {
						$('#back-to-top').fadeIn();
					} else {
						$('#back-to-top').fadeOut();
					}
				});
				// scroll body to 0px on click
				$('#back-to-top').click(function () {
					$('#back-to-top').tooltip('hide');
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				});
				$('#back-to-top').tooltip('show');
			});
		</script>