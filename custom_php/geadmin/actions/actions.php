<?php
switch ($_GET[m])
{
case 'viewletter':
    include 'templates/view_letter_tpl.php';
    break;

case 'mailed':
    
    set_data("MAIL_DATA,id=$_GET[id]");
    check_owner();
    $GLOBALS[status]="Sent";
    update_data('status');
    redirect("index.php?p=admin");
    break;

case 'deleteusers':
    set_data("USERS,id=$_GET[id]");
    check_owner();
    delete_data();
    redirect("index.php?p=admin");
    break;

case 'deleteletter':
    set_data("MAIL_DATA,id=$_GET[id]");
    check_owner();
    delete_data();
    if ($_SESSION[useremail]=='admin')redirect("index.php?p=admin");
    if ($_SESSION[useremail]<>'admin')redirect("index.php?p=dashboard");
    break;
    
}
?>