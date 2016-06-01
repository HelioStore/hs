<?php
header('Content-Type: text/plain; charset=utf-8');
if($_SERVER['HTTP_HOST']=='heliostore.ru'){
echo 'User-agent: *
Disallow: /cart/*
Disallow: /register/*
Disallow: /etc/*
Host: https://heliostore.ru/
Sitemap: https://heliostore.ru/sitemap-1.xml';
} else if($_SERVER['HTTP_HOST']=='2nd-domain.com'){
echo 'User-agent: *
Disallow: /
Host: https://2nd-domain.com/';
} 
else if($_SERVER['HTTP_HOST']=='3rd-domain.com'){
echo 'User-agent: *
Disallow: /
Host: https://3rd-domain.com/';
} 
else {echo 'User-agent: *
Disallow: /';}
?>
