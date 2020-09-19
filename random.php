<?php

$rand = rand(1,201);
$url = 'https://cdn.jsdelivr.net/gh/Slienca/Imgur/Images/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>