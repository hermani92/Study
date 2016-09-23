<?php
	
	date_default_timezone_set('UTC');
	
	$location = $_POST['set_location'];
	
	$xml = new SimpleXMLElement('http://api.openweathermap.org/data/2.5/weather?q='.$location.'&APPID=259b293f04ff29f8f0027d5cd237dde9&mode=xml', NULL, TRUE);
	
	echo 'The weather of '.$location.' at '.date("j M Y").'  '.(string)$xml->weather->attributes()->value;

