<?php

include 'function.php';

$url = 'https://google.com';
$data = curl($url);

print_r($data);

?>