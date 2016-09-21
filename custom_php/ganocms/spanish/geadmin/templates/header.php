<?php

ini_set('display_errors', '0');
?>
<style type="text/css">
@font-face {
    font-family: 'Century Gothic';
    src: url('../skin/fonts/GOTHIC.TTF');
}

.wrapper {

padding-top:20px;    
}

body {
    font-family:Century Gothic;
    margin: 0 !important;
    padding: 0 !important;
    background-color:#dadada;
}

h3 {
    color:white;
    background-color:#a22326;
    border-width:1px;
    border-style:solid;
    border-color:#777777;
    padding:10px;
    margin:0px;
    
}

h3:hover {
    color:white;
    background-color:red;
    border-width:1px;
    border-style:solid;
    border-color:#777777;
    padding:10px;
    margin:0px;
    
}

.content {
    width:1100px;
    padding:20px;
}

.box {

}

.section {
    padding:10px;
    background-color:white;
}

.section2 {
    padding:10px;
    background-color:#efefef;
}

input[type=submit]{
background-color:#a22326;
border-width:0px;
padding:10px;
color:white;
cursor:pointer;
margin:5px;
}

input[type=submit]:hover{
background-color:red;
border-width:0px;
padding:10px;
color:white;
}


.logo
{
    width:30%;
    min-width: 200px;
    display:inline-block;
  vertical-align: middle;
        margin:0px;
        padding:0px;
        background-color: white;
        height:66px;
        margin:0px;
}

.nav-bar2{
    background-color:#a22326;
    position:fixed;
    width:100%;
    z-index:99999;
        /*min-width:1200px; */
}

.logo img
{
    margin-top:10px;
    float:right;
}

.nav2
{

    max-width:69%;
    min-width: 1024px;
    background-color:#a22326;
    display:inline-block;
    vertical-align: middle;
    height:66px;
    background-image: url('../skin/images/navcurve.png');
    background-repeat: no-repeat;
    margin-left:-5px;
            padding:0px;
}

.nav3
{

    width:100%;
    background-color:#a22326;
    display:inline-block;
    vertical-align: middle;
    height:110px;
    background-image: url('../skin/images/navcurve.png');
    background-size: 20px 110px;
    background-repeat: no-repeat;
    margin-left:-5px;
            padding:0px;
}


.nav2 ul
{
height:66px;
padding:0px;
  vertical-align: top;
margin:0px;
margin-left:30px;
}
.nav2 li
{
    display:inline;
   height:66px;

}

.nav2 li a
{

    display:inline-block;
    color:white;
    font-family:Century Gothic;
    text-decoration:none;
    padding:6px;
    margin-left:20px;
    height:54px;
       text-align: middle;
    line-height:54px;

}

.nav2 li a:hover
{
    background-color:#425468;
}


.nohover hover {
    background-color:transparent !important;
}

.ti {
    cursor: pointer;
    background-color:#dadada;

    padding:5px;
    margin:0px;
}

</style>

<?php include 'templates/navbar.php';?>

<div class="wrapper" align="center"><br>

<div class="content" align="left">    
