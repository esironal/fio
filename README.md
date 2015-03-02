# fio
A simple bookmark page that connects with a Google Spreadsheet to get its data.

## Example Config
The config file is located in /config and should named settings.inc.php.

```
<?php
	define('SHOW_ERRORS', true);

	define('ROOT_PATH', '/Users/username/htdocs/fio');
	define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] );
	
	define('HOME_SLUG', 'home');
	define('APP_CACHE' , BASE_PATH . '/app_cache' );
	define('APP_CACHE_TIME', 3600);

	define('GOOGLE_KEY', 'INSERT_GOOGLE_KEY_HERE');
	define('GOOGLE_SPREADSHEET_ID', 'od6'); // First tab is always od6
	
	/* Load class files */
	include_once( BASE_PATH . '/libs/fio.class.php' );
?>
```

## App Cache
Create a writeable app_cache folder in the root folder in order to use cache. By default, it will update itself every hour. This can be changed by editing the APP_CACHE_TIME constant in settings.inc.php.

## Spreadsheet and data
An example spreadsheet can be found here: https://docs.google.com/spreadsheet/pub?key=0AvhqNpXbu1ejdERlbGJNalJfOWtLQVg5bTJfNzJFaWc&output=html

You can add or replace new columns as you wish. Keep in mind that if you change them, you need to edit accordingly in libs/fio.class.php. Look for:

```
$cells['id'] = $entry->{'gsx$id'}->{'$t'};
$cells['name'] = $entry->{'gsx$name'}->{'$t'};
$cells['description'] = $entry->{'gsx$description'}->{'$t'};
$cells['url'] = $entry->{'gsx$url'}->{'$t'};
$cells['category'] = $entry->{'gsx$category'}->{'$t'};
$cells['favicon'] = 'http://www.google.com/s2/favicons?domain='.$cells['url'];
```

## Dependencies
This app uses jQuery and jQuery.FilterTable (http://sunnywalker.github.io/jQuery.FilterTable/)