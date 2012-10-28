<?php
	//kill that cache on JS files.
	$cacheBuster = "?cache=".rand();
?>
<!doctype html>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>

		<meta name="viewport" content="user-scalable=no, initial-scale=1">

		<!-- STYLES + RESET -->
		<link rel="stylesheet" href="../src/css/style.css<?php print $cacheBuster; ?>">

		<!-- LIBS -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="src/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

		<script src="https://raw.github.com/millermedeiros/js-signals/master/dist/signals.min.js"></script>
		<script>window.signals || document.write('<script src="src/js/libs/signals.min.js"><\/script>')</script>

		<script src="https://raw.github.com/janl/mustache.js/master/mustache.js"></script>
		<script>window.Mustache || document.write('<script src="src/js/libs/mustache.js"><\/script>')</script>

		<!-- add bootstrap for example usage -->
		<script src="assets/js/libs/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="../src/js/libs/libraries.js"></script>
		<script src="../src/js/libs/path.js"></script>

		<!-- LOGIC -->
		<script src="../src/js/Single.framework.js<?php print $cacheBuster; ?>"></script>
		<script src="../src/js/Single.debug.js<?php print $cacheBuster; ?>"></script>
		<script src="../src/js/Single.views.js<?php print $cacheBuster; ?>"></script>

		<script src="assets/js/SimpleExample.js<?php print $cacheBuster; ?>"></script>

		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', "U-XXXXXX-XX"]);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<script>
			
		</script>

		<section id="site">
			<!-- dynamic content -->
			<div id="pages">
			</div>
		</section>
	</body>
</html>