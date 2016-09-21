<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include 'config.php';

include 'templates/header.php';

if ($_GET[p]=='logout') $_SESSION[admin]=0;


if ($_POST[user]=='admin' && $_POST[pass]=='ganoadmin') $_SESSION[admin]=1;

if ($_SESSION[admin]==1)
{

if ($_GET[p]=='opportunity') include 'templates/home.php';

if ($_GET[p]=='') include 'templates/home.php';

if ($_GET[p]=='trynow') include 'templates/trynow.php';

if ($_GET[p]=='business') include 'templates/business.php';

if ($_GET[p]=='news') include 'templates/news.php';

if ($_GET[p]=='products') include 'templates/products.php';

if ($_GET[p]=='company') include 'templates/company.php';



} else
{
    ?>
    <div align="center"><br><br>
    <h2>GANO EXCEL LOGIN</h2>
    <form action="index.php" method="post">
    <p><input type="text" name="user" placeholder="Username"></p>    
    <p><input type="password" name="pass" placeholder="Password"></p>    
<p><input type="submit" name="submit" value="LOGIN"></p>
    </form>
    </div>
    <?php
}
include 'templates/footer.php';


?>