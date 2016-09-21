<?php
include '../config.php';



if ($_POST[eid]==''){
set_data("TESTDAY");
create_data($_POST);


}

if ($_POST[eid]<>''){
set_data('TESTDAY,id='.$_POST[eid]);
update_data($_POST);
}


?>

<script>
alert('Test Day Saved');    
</script>
  <?php
    set_data("TESTDAY");

    $testday=collection();

echo '<div class="playertable"><table style="border-collapse: collapse;"><tr><td></td><td>Location</td><td>Date</td><td>Time</td><td>Special Instructions</td></tr>';
foreach ($testday as $day)
{
echo '<tr ><td >'.del('TESTDAY',$day[id]).'</td><td onclick="document.location =\'index.php?p=admin&eid='.$day[id].'\';">'.$day[location].'</td><td>'.$day[testdate].'</td><td>'.$day[testtime].'</td><td>'.$day[details].'</td>';
?>
</tr>


<?php
}



?>
</table>
</div>