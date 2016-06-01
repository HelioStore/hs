<?php
header('Content-Type: text/plain; charset=utf-8');
if($_SERVER['HTTP_HOST']=='heliostore.ru'){
echo 'User-agent: *
Disallow: /cart/*
Disallow: /compare/*
Disallow: /reservation/*
Disallow: /auth/*
Disallow: /register/*
Disallow: /my/*
Disallow: /oneclick/*
Host: https://heliostore.ru/
Sitemap: https://heliostore.ru/sitemap-1.xml';
} else if($_SERVER['HTTP_HOST']=='heliora.ru'){
echo 'User-agent: *
Disallow: /
Host: https://heliostore.ru/';
} 
else if($_SERVER['HTTP_HOST']=='geliostore.ru'){
echo 'User-agent: *
Disallow: /
Host: https://heliostore.ru/';
} 
else {echo 'User-agent: *
Disallow: /';}
?>
