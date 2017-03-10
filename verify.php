<?php
$access_token = 'VVV5Bq/v+b+VGlTTo1xP7Bjis5FCrBW5EmHBSJEW0vMuvjo5TEvG2NRAH8ToCq1IMQToPoOPgUGXj8ychdYXOm2Zi3aNFwkrGWmF/Zd0f6NNQIxrIHrHT2NeDh3slqR7f6RFY55MszbwUaTd++nCaAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;