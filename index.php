<?php
	require_once('config/settings.inc.php');

	if(SHOW_ERRORS) {
		//phpinfo();
		error_reporting(1);
		ini_set('display_errors', 'On');
	}

	if( isset($_GET['get_data']) ){
		header('Content-type: application/json');
		echo $Fio::get_app_data();
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fio</title>
		<meta charset="utf-8"/>
		<meta name="description" content="">
		<meta name="viewport" content="user-scalable=yes,width=device-width" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/google-code-prettify/prettify.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
		<script src="assets/js/filtertable/jquery.filtertable.min.js" type="text/javascript"></script>
		<script src="assets/js/fio.main.js" type="text/javascript"></script>
		<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
	</head>
	<body onload="prettyPrint()">
		<div id="fio-header">
			<div class="flex">
				<div class="col fluid">
					<h1>Fio</h1>
				</div>
			</div>
		</div>
		<div id="fio-scene">
			<table id="contenttable"></table>
			<!--<div class="flex">
				<div class="col fluid">
					<h2>Dates <span class="language">JavaScript, jQuery</span></h2>
					<ul>
						<li><a href="pages/date-amount-of-days-between-dates.html">Get amount of days between two dates</a></li>
						<li><a href="#">Check what day a date is</a></li>
						<li><a href="#">Check how many days a month has</a></li>
						<li><a href="#">Parse date (YYYY-MM-DD to date object)</a></li>
						<li><a href="pages/date-get-week-no.html">Get week number from date</a></li>
					</ul>
				</div>
				<div class="col fluid">
					<h2>Characters & paragraphs <span class="language">JavaScript</span></h2>
					<ul>
						<li><a href="#">Count characters in textarea or HTML5 editable</a></li>
						<li><a href="#">Count paragraphs in textarea or HTML5 editable</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
					</ul>
				</div>
				<div class="col fluid">
					<h2>Widths & heights</h2>
				</div>
				<div class="col fluid">
					<h2>jQuery plugin</h2>
					<ul>
						<li><a href="#">Plugin base structure (with methods)</a></li>
						<li><a href="#">Plugin base structure (without methods)</a></li>
						<li><a href="#">jQuery Lettercountin</a></li>
						<li><a href="#">jQuery Elegantt</a></li>
					</ul>
				</div>
			</div>
			<div class="flex">
				<div class="col fluid">
					<h2>Misc <span class="language">JavaScript, jQuery</span></h2>
					<ul>
						<li><a href="#">Get scrollbar width</a></li>
					</ul>
				</div>
				<div class="col fluid">
					<h2>Characters & paragraphs</h2>
					<ul>
						<li><a href="#">Count characters in textarea or HTML5 editable</a></li>
						<li><a href="#">Count paragraphs in textarea or HTML5 editable</a></li>
					</ul>
				</div>
				<div class="col fluid">
					<h2>Widths & heights</h2>
				</div>
				<div class="col fluid">
					<h2>jQuery plugin</h2>
				</div>
			</div>-->
		</div>

		<script src="libs/js/App.js"></script>
		<script type="text/javascript">
			window.onload = function() {
					
				var App = new Application();
					
				App.init();
			}
		</script>
	</body>
</html>