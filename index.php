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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
		<script src="assets/js/filtertable/jquery.filtertable.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="fio-header">
			<div class="flex">
				<div class="col fluid">
					<h1>Fio</h1>
				</div>
			</div>
		</div>
		<div id="fio-scene">
			<table id="contenttable"></table>
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