<?php
include('config/init.php');
verifyUser();
echoTaskHeader('Profile', 'Profile');

$person = getPerson($_SESSION['personId']);
echo"A little bit about ".$person['name'].": ".$person['about'];
?>