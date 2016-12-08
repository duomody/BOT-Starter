<?php
$access_token = 'wFw2LY/ScAOIReDCM7AAhHmxRnp5mNw8JDzMPtI0SmcAxO40JsrGzfCOTe9s+IoFZ8Aa6zBsuWsuk44FB+6iV/S3qE+cDbPt/e4e0D6hTrL6S1BCCD3AL89bOWr68QJvaPbYRzFJBF7nki+91bAnRAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
