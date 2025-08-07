<?php

// Expire the authentication cookie
unset($_SESSION['authenticated']);

// Expire the Administrator cookie
unset($_COOKIE['isSiteAdministrator']); 
setcookie('isSiteAdministrator', '', -1, '/'); 

// Redirect to the login page
header('Location: /login.php');
exit();

?>