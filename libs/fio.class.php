<?php
	class Fio{
		function get_app_data(){
			if( defined('GOOGLE_KEY') ){
				$url = "http://spreadsheets.google.com/feeds/list/". GOOGLE_KEY ."/". GOOGLE_SPREADSHEET_ID ."/public/values?alt=json";
				
				if( defined('APP_CACHE') ){
					
					$cachefile = APP_CACHE . '/' . sha1( $url ) . '.appcache';
					$use_cache = true;
					
					if( !file_exists($cachefile) || filemtime($cachefile) < (time()-3600) ){
						$use_cache = false;
					}
				}
				
				if($use_cache){
					
					$handle = fopen($cachefile, 'r');
					$cache = fread($handle, filesize($cachefile));
					fclose($handle);
					return $cache;
					
				}else{
				
					$ch = curl_init();
			
					// set URL and other appropriate options
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
					
					// grab URL and pass it to the browser
					$json = curl_exec($ch);
					
					// close cURL resource, and free up system resources
					curl_close($ch);
					
					$data = json_decode($json);
					
					$entries = (array) $data->feed->entry;
					$retval = array();
					$categories = array();
					foreach($entries as $entry){
						$cells = array();
						
						$cells['id'] = $entry->{'gsx$id'}->{'$t'};
						$cells['name'] = $entry->{'gsx$name'}->{'$t'};
						$cells['description'] = $entry->{'gsx$description'}->{'$t'};
						$cells['url'] = $entry->{'gsx$url'}->{'$t'};
						$cells['category'] = $entry->{'gsx$category'}->{'$t'};
						
						$categories[$cells['category']][] = $cells;
						array_push($retval, $cells);
				    }
				    
				    if(isset($cachefile)){
					    
					    $handle = fopen($cachefile, 'w');
						fwrite($handle,  json_encode($categories) );
						fclose($handle);
				    }
				    
				    return json_encode( $categories );
			    
			    }
				
				
			}else{
				throw new Exception( 'No GOOGLE KEY defined, can\'t fetch document' );
			}
		}
		
	}
	
	
	$Fio = new Fio();
?>