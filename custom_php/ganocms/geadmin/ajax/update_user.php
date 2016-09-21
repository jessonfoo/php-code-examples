<?php
include '../config.php';
set_data("USERS,id=$_SESSION[userid]");
if (validate()==FALSE)
{
$error=1;    
echo '<p style="color:red;">Please enter all of the required information</p>';    
} 


if (isset($_POST[password2]))
{
    if ($_POST[password2]<>$_POST[password_req])
    {
    $error=1;
    echo "<p>Passwords don't match</p>";
    }
}



if ($error==0){

update_data($_POST);
echo "Information Saved";    
//account created  
?>  
<script>
    alert ('Profile Updated');
</script>
<?php
}

?>