<?php
include('config/init.php');

$username = "";
$password = "";
$usernameError = "";
$passwordError = "";
$sucess = "";

if($_SERVER["REQUEST_METHOD"] == "$_POST"){
    if(empty(trim($_POST["username"]))){
        
    }
}

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
        username: <input type='username' name='username' value="" required/><br/>
        password: <input type='password' name='password' /><br/>
    <br/><br/>
    <!-- submit button-->
    <button onclick= "location.href='viewPerson.php'"> Enter</button>
    <input type= 'Enter' name='attemptLogin'/>
</form>