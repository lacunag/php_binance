<?php
// Development example by Luis Acuna "Api Binance"
// The data obtained depending on the credentials used

require 'api_binance.php';
$api = new Binance("<key>","<secret>");

// Example called api binance function
$tickers = $api->account('time');
print_r($tickers);
