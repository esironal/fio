# fio
A simple bookmark page that connects with a Google Spreadsheet to get its data

## Example Config
The config file is located in /config and should named settings.inc.php

```
<?php
	define('SHOW_ERRORS', true);

	define('ROOT_PATH', '/Users/username/htdocs/fio'); // Change to your fio root path
	define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] );
	
	define('HOME_SLUG', 'home');
	define('APP_CACHE' , BASE_PATH . '/fio/app_cache' );

	define('GOOGLE_KEY', 'INSERT_GOOGLE_KEY_HERE');
	define('GOOGLE_SPREADSHEET_ID', 'od6'); // First tab is always od6
	
	/* Load class files */
	include_once( BASE_PATH . '/fio/libs/fio.class.php' );
?>
```