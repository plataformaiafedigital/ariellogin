<?php

required __DIR__ . '/vendor/autoload.php';

$client = new\Google_Client();
$client ->setApplicationName('Ariel Sheets');
$client ->setScopes([\Gloogle_Service_Sheets::SPREADSHEETS]);
$client ->setAccessType('offline)