<?php
/*
NVG DATA FRAMEWORK
V1.0 1/12/15
*/

//=========================================set data obj=======================================


function set_data($params)
{

$params=explode(',',$params);
global $table;
$table=$params[0];
global $specify;
$specify=$params[1];
    
}

//=========================================retrieve data=======================================

function data($var)
{
    
global $con;
global $specify;
global $table;


if ($specify<>NULL) { 
    $result = mysqli_query($con,"SELECT $var FROM $table where $specify");
    } else {
    $result = mysqli_query($con,"SELECT $var FROM $table");
    }
    
$data= mysqli_fetch_assoc($result);
return $data[$var];
}


//=========================================create data=======================================

function create_data($params)
{
        
global $con;
global $specify;
global $table;    
global $_POST;

if ($params==$_POST){
foreach($params as $key => $value)
{
    $value=htmlspecialchars($value, ENT_QUOTES);

    if ($cnt==0){
        mysqli_query($con,"INSERT INTO $table ($key) VALUES ('$value')");

        $id=mysqli_insert_id($con);
        
    }
    if ($cnt>0)mysqli_query($con,"UPDATE $table SET $key='$value' where id=$id");

    
    $cnt++;
    

    
    
}
    
    
    
} else {   
$params=explode(',',$params);

    foreach ($params as $vars)
    {
   
    
    $dvars=$vars;
    if (strpos($vars,'POST')>0)
    {
    $dvars=str_replace('$_POST[','',$vars);
    $dvars=str_replace(']','',$dvars);
    }
    
    if ($cnt==0){
        mysqli_query($con,"INSERT INTO $table ($dvars) VALUES ('$GLOBALS[$vars]')");
        $id=mysqli_insert_id($con);
        
    }
    if ($cnt>0)mysqli_query($con,"UPDATE $table SET $dvars='$GLOBALS[$vars]' where id=$id");
    
    
    $cnt++;
    }




}    


    return $id;
}


//=========================================update data=======================================
function update_data($params)
{

global $con;
global $specify;
global $table;    
global $_POST;

if ($params==$_POST){
    
foreach($params as $key => $value)
{
        $value=htmlspecialchars($value, ENT_QUOTES);
mysqli_query($con,"UPDATE $table SET $key='$value' where $specify");
  
}
    
    
    
} else {   

    
$params=explode(',',$params);

    foreach ($params as $vars);
    {
    
    $dvars=$vars;
    if (strpos($vars,'POST')>0)
    {
    $dvars=str_replace('$_POST[','',$vars);
    $dvars=str_replace(']','',$dvars);
    
        
    }
        $value=htmlspecialchars($GLOBALS[$vars], ENT_QUOTES);
    mysqli_query($con,"UPDATE $table SET $dvars='$value' where $specify");
    }

}
}
//=========================================delete data=======================================

function delete_data()
{

global $con;
global $specify;
global $table;    
    
        mysqli_query($con,"DELETE FROM $table WHERE $specify");
    
}


//=======================================get collection======================================

function collection()
{


global $con;
global $specify;
global $table;  

if ($specify=='')
{
$result=mysqli_query($con,"SELECT * FROM $table");
    
} else
{
$result=mysqli_query($con,"SELECT * FROM $table where $specify");
}
while($row = mysqli_fetch_array($result))
{
$collect[]=$row;
    
}

return $collect;    
}    



//==================================================validation=================================
function validate(){
global $_POST;
$ret=TRUE;
foreach ($_POST as $key=>$value)
{
    
if (strpos($key,'_req')>0 && $value=='') $ret=FALSE;
    
}

return $ret;
}

//===============================================check unique===================================
function unique_data($var){
global $_POST;
global $con;
global $specify;
global $table; 
$unique=TRUE;
$result = mysqli_query($con,"SELECT * FROM $table where $var='$_POST[$var]'");
while($row = mysqli_fetch_array($result))
{
$unique=FALSE;    
}

return $unique;
}

function hidden($var,$val)
{


    echo '<input type="hidden" name="'.$var.'" value="'.$val.'">'; 
}

//===================================check owner=============================
function check_owner()
{

if (data('user_id')<>$_SESSION[userid] && $_SESSION[useremail]<>'admin')
{
 ?>
 <script>
window.location="index.php";
</script>   
<?php
}
}

function redirect($link)
{
?>
<script>
window.location="<?php echo $link;?>"
</script>
<?php    
}
?>