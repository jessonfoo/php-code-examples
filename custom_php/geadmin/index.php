<?php 
include 'config.php';

include 'templates/header.php';

if ($_GET[p]=='opportunity') include 'templates/home.php';

if ($_GET[p]=='trynow') include 'templates/trynow.php';

if ($_GET[p]=='business') include 'templates/business.php';

if ($_GET[p]=='news') include 'templates/news.php';

if ($_GET[p]=='products') include 'templates/products.php';

include 'templates/footer.php';
?>