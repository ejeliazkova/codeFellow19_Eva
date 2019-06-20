<?php
include('config/init.php');
//echo"Login please";

if(isset($_REQUEST['attemptLogin'])){
    $personId = attemptLogin($_REQUEST['username'], $_REQUEST['password']);
    $_SESSION['personId']=$personId; //why are we saving username and password array into session[personId]
    
    echo"You are logged in as ".$personId['personId'].".
    <a href='viewPerson.php?userCode=".$personId['personId']."'> Go to ur prof</a>
    ";
    exit;
}
?>

<form action='' method = 'post'>
    <p class= 'Login'>
        username: <input type='username' name='username' /><br/>
        password: <input type='password' name='password' /><br/>
    <br/><br/>
    <!-- submit button-->
    <button onclick= "location.href='viewPerson.php'"> Enter</button>
    <input type= 'Enter' name='attemptLogin'/>
</form>