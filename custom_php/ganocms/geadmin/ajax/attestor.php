<?php
include '../config.php';
set_data("USERS,id=$_POST[userselect]");

?>
 <span class="playername"><?php echo data(first_name_req).' '.data(last_name_req);?></span><span class="city"><?php echo data(city_req).', '.data(state_req);?></span>
 
 <?php 
    set_data("ABILITIES,player_id=$_POST[userselect]");



?>
<br><br>
<table>
    <tr>
        <td><strong>Age:</strong></td>
        <td  width=400><?php attest('age',$_POST[userselect]);?></td>
        <td><strong>40 Yard:</strong></td>
        <td><?php echo data(forty);?></td>
    </tr>
        <tr>
        <td><strong>Gender:</strong></td>
        <td  width=400><?php echo data(gender);?></td>
        <td><strong>Shuttle:</strong></td>
        <td><?php echo data(shuttle);?></td>
    </tr>
        <tr>
        <td><strong>Height:</strong></td>
        <td  width=400><?php echo data(height);?></td>
        <td><strong>Vertical:</strong></td>
        <td><?php echo data(vertical);?></td>
    </tr>
        <tr>
        <td><strong>Weight:</strong></td>
        <td  width=400><?php echo data(weight);?></td>
        <td><strong>Hand-Size:</strong></td>
        <td><?php echo data(handsize);?></td>
    </tr>
        <tr>
        <td><strong>Reach:</strong></td>
        <td  width=400><?php echo data(reach);?></td>
        <td><strong>Powerball Chest Launch:</strong></td>
        <td><?php echo data(powerball);?></td>
    </tr>
</table>

<?php 

?>