<?php

/*

Because its NOT Faster......

function show_page($page) {
	$page_url = TEMPLATES_URL . '/' . $page . / '_tpl.php';
	
	if(file_exists($page_url)) {
		include $page_url; 
	} else {
		include 'default.php';
	}
}

*/

function show_page($page)
{
switch ($page){
            
        case "":
        include 'templates/home_tpl.php';
        break;        

        case "home":
        include 'templates/home_tpl.php';
        break;    
         
        case "login":
        include 'templates/login_tpl.php';
        break;    
        
        case "register":
        include 'templates/register_tpl.php';
        break;    
        
        case "forgot":
        include 'templates/forgot_tpl.php';
        break;    
        
        case "dashboard":
        if ($_SESSION[usertype]=='athlete') include 'templates/dash_tpl.php';
        if ($_SESSION[usertype]=='coach')include 'templates/advancedsearch_tpl.php';
      
        break; 
        
        case "advanced":
        include 'templates/advancedsearch_tpl.php';
        break; 
        
        case "search":
        include 'templates/search_tpl.php';
        break; 
        
        case "logout":
        $_SESSION[userid]='';  ?>
        <script>
window.location="index.php";
</script>
        <?php
        break; 
        
        case "admin":
        include 'templates/admin_tpl.php';
        break; 
        
        case "profile":
        include 'templates/profile_tpl.php'; 
        break;
        
        case "attestor":
        include 'templates/attestor_tpl.php'; 
        break;
        
        case "results":
        include 'templates/results_tpl.php'; 
        break;
        
        case "message":
        include 'templates/message_tpl.php'; 
        break;
        
        case "getattested":
        include 'templates/get_attested_tpl.php'; 
        break;

        case "about":
        include 'templates/about_tpl.php'; 
        break;
		
        case "contact":
        include 'templates/contact_tpl.php'; 
        break;
		
        case "careers":
        include 'templates/careers_tpl.php'; 
        break;
		
        case "privacy":
        include 'templates/privacy_tpl.php'; 
        break;
		
        case "terms":
        include 'templates/terms_tpl.php'; 
        break;
        
         case "thanks":
        include 'templates/thanks.php'; 
        break;    
        
        default:
        include 'templates/404_tpl.php';
}  
    
}

function get_block($block)
{
include 'blocks/'.$block.'.php';    
}
?>