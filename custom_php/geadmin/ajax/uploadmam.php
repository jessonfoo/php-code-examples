<?php
include '../config.php';
set_data("MAM,id=$_SESSION[userid]");


$target_dir = "../uploads/".rand(100000,999999);
$target_file = $target_dir . basename($_FILES["tsfile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $check = getimagesize($_FILES["tsfile"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
       // $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["tsfile"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  //  echo $_FILES["tsfile"]["tmp_name"];
    if (move_uploaded_file($_FILES["tsfile"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["tsfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk <> 0) {
$target_file=str_replace('../','',$target_file);
mysqli_query($con,"INSERT into $table (image,player_id,title) VALUES ('$target_file',$_SESSION[userid],'$_POST[tsname]')");

set_data("MAM,player_id=$_SESSION[userid]");
$tscripts=collection();
foreach ($tscripts as $tsout)
{
    echo '</span>'.del('MAM',$tsout[id]).'<img width=150 src="'.$tsout[image].'" title="'.$tsout[title].'"></span>';
}
}
?>