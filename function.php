<?php
function curl($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     curl_setopt($data, CURLOPT_SSLVERSION,1);
     curl_setopt($data, CURLOPT_SSL_VERIFYPEER, true);
     curl_setopt($data, CURLOPT_SSL_VERIFYHOST, true);
     curl_setopt($data, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36');
     
     $result = curl_exec($data);
     curl_close($data);
     return $result;
}
?>