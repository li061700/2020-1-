<?php
require_once 'curl.func.php';
$url = "http://api.caijingmobile.com/api/2.0/authorlist.php?bundleid=cn.com.caijing.iphone&platform=ios7.0.2&appver=2.0&network=wifi";
$result = curlOpen($url);
echo json_encode($result,true);
?>