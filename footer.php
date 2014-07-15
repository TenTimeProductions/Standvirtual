<?php 
	$copyYear = 2014; 
	$curYear = date('Y'); 
	$direitos = $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?>

<!-- FOOTER -->
      <footer>
        <p>&copy; <?php echo $direitos; ?> Company, Inc. &middot; <strong><a href="#">TenTimeProductions</a></strong> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="#">Administrador</a></p>
      </footer>

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

		<script>
      		$(function () {
          		$("[data-toggle='tooltip']").tooltip();
				$("[data-toggle='popover']").popover();
				$("time.timeago").timeago();
      		});
		</script>