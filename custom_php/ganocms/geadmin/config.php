<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');
$con=mysqli_connect("localhost","gano_db","SQLpass123!@","gano_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



include 'nvg/nvg_data.php';
include 'nvg/nvg_builder.php';



?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  <!-- Include IE8 JS. -->
  <!--[if lt IE 9]>
      <script src="lib/texteditor/js/froala_editor_ie8.min.js"></script>
  <![endif]-->
  