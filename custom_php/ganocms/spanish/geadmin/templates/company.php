<?php
if ($_POST[submit]=="SAVE")
{
    for ($i=1;$i<=10;$i++)
    {
        $x='p'.$i;
        $xr='p'.$i.'r';
mysqli_query($con,"UPDATE COMPANY SET text='$_POST[$x]' where position='$x'");
mysqli_query($con,"UPDATE COMPANY SET text='$_POST[$xr]' where position='$xr'");

    }
    ?>
<script>
alert ('SAVED');    
</script>

<?php
}



for ($i=1;$i<=10;$i++)
    {
set_data("COMPANY,position='p".$i."'");
$t[$i]=data(text);
set_data("COMPANY,position='p".$i."r'");
$tr[$i]=data(text);
        
    }


?>



<div class="wrapper">
<h2>Company Page Content</h2>

<form action="index.php?p=company" method="POST">
    
<p>Text 1</p>
<textarea rows=8 cols=60 name="p1"><?php echo $t[1];?></textarea>
<p>Text 1 Read More</p>
<textarea rows=8 cols=60 name="p1r"><?php echo $tr[1];?></textarea>
<br><br>

<p>Text 2</p>
<textarea rows=8 cols=60 name="p2"><?php echo $t[2];?></textarea>
<p>Text 2 Read More</p>
<textarea rows=8 cols=60 name="p2r"><?php echo $tr[2];?></textarea>
<br><br>

<p>Text 3</p>
<textarea rows=8 cols=60 name="p3"><?php echo $t[3];?></textarea>

<br><br>

<p>Text 4</p>
<textarea rows=8 cols=60 name="p4"><?php echo $t[4];?></textarea>
<p>Text 4 Read More</p>
<textarea rows=8 cols=60 name="p4r"><?php echo $tr[4];?></textarea>
<br><br>

<p>Text 5</p>
<textarea rows=8 cols=60 name="p5"><?php echo $t[5];?></textarea>
<p>Text 5 Read More</p>
<textarea rows=8 cols=60 name="p5r"><?php echo $tr[5];?></textarea>
<br><br>

<p>Text 6</p>
<textarea rows=8 cols=60 name="p6"><?php echo $t[6];?></textarea>
<p>Text 6 Read More</p>
<textarea rows=8 cols=60 name="p6r"><?php echo $tr[6];?></textarea>
<br><br>

<p>Text 7</p>
<textarea rows=8 cols=60 name="p7"><?php echo $t[7];?></textarea>
<p>Text 7 Read More</p>
<textarea rows=8 cols=60 name="p7r"><?php echo $tr[7];?></textarea>
<br><br>

<p>Text 8</p>
<textarea rows=8 cols=60 name="p8"><?php echo $t[8];?></textarea>

<br><br>

<p>Text 9</p>
<textarea rows=8 cols=60 name="p9"><?php echo $t[9];?></textarea>
<p>Text 9 Read More</p>
<textarea rows=8 cols=60 name="p9r"><?php echo $tr[9];?></textarea>
<br><br>

<p>Text 10</p>
<textarea rows=8 cols=60 name="p10"><?php echo $t[10];?></textarea>
<p>Text 10 Read More</p>
<textarea rows=8 cols=60 name="p10r"><?php echo $tr[10];?></textarea>
<br><br>

<input type="submit" name="submit" value="SAVE">

</form>