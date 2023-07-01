<?php
$url =  'http://www.example.com/5478631';
$path= parse_url($url, PHP_URL_PATH);
echo basename($path);
?>