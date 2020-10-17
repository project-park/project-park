<?php

include 'class.IPInfoDB.php';

// Load the class
$ipinfodb = new IPInfoDB('e38c94ec3242fe5e15df0aebebd3ca5e681c9f7a83632241c34a9b6cc365366a');

$results = $ipinfodb->getCity('59.91.105.215');

// Getting the result
echo "Results for city query:<br>";
if (!empty($results) && is_array($results)) {
	foreach ($results as $key => $value) {
		echo $key . ' : ' . $value . "<br>";
	}
}

/*
Results for city query:
statusCode : OK
statusMessage :
ipAddress : 59.91.105.215
countryCode : IN
countryName : India
regionName : Karnataka
cityName : Bengaluru
zipCode : 560018
latitude : 12.9762
longitude : 77.6033
timeZone : +05:30
*/

$results = $ipinfodb->getCountry('59.91.105.215');

// Getting the result
echo "Results for country query:<br>";
if (!empty($results) && is_array($results)) {
	foreach ($results as $key => $value) {
		echo $key . ' : ' . $value . "<br>";
	}
}

/*
Results for country query:
statusCode : OK
statusMessage :
ipAddress : 59.91.105.215
countryCode : IN
countryName : India
*/

?>