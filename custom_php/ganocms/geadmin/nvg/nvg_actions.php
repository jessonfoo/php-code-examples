<?php




function protect($type,$page)
{
if ($type=='any') {

if ($_SESSION[userid]=='')
{
    ?>
<script>
window.location="<?php echo $page;?>";
</script>    
<?php
}
 
} 


if ($type=='admin') {

if ($_SESSION[useremail]<>'admin')
{
    ?>
<script>
window.location="<?php echo $page;?>";
</script>    
<?php
}
 
} 


}

?>