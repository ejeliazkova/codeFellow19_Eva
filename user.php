<?php
include('config/init.php');
echoHeader('Profile', 'Profile');

$person = getPerson($_SESSION['personId']);
echo"A little bit about ".$person['name'].": ".$person['about'];

//if(isset($_REQUEST['jobView'])){
   // header("Location: /jobsForPerson.php");    
//}
?>
</div>
<!--could be a link or just a get request bc post is saving
<form action='' method = 'get'>
    <input type= 'hidden' name='jobView' value='true'/>
    <input type= 'submit' class= button name='Jobs' value='Jobs'/>

</form>-->