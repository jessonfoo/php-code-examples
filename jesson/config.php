<?php
  // ini_set('session.save_path',realpath(dirname($_server['document_root']).'/../session'));
  session_save_path('/home/Accutek/session/');
  session_start();
  //error_reporting(e_all);
  //ini_set('display_errors', '1');
  $con=mysqli_connect("localhost","accutek_ac","accutek123","accutek_ac");




  // Check connection
  if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

  // include 'config/path.php';

  include 'nvg/nvg_data.php';
  include 'nvg/nvg_builder.php';
  // include 'nvg/nvg_actions.php';
  // include 'nvg/pages.php';




?>