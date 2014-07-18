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
							<img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
							<br>
							<h4 class="footertext">Programmer</h4>
							<p class="footertext">You can thank all the crazy programming here to this guy.<br>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
							<br>
							<h4 class="footertext">Artist</h4>
							<p class="footertext">All the images here are hand drawn by this man.<br>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
							<br>
							<h4 class="footertext">Designer</h4>
							<p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
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
		<script src="public/plugins/search.js" type="text/javascript"></script>

		<!-- Panels details.php -->
		<script src="public/plugins/panels.js" type="text/javascript"></script>

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
					if ($(this).scrollTop() > 50) {
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