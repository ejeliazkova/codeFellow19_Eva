<?php
include('config/init.php');

if(isset($_REQUEST['attemptLogin'])){
    $personId = attemptLogin($_REQUEST['username'], $_REQUEST['password']);
    //var_dump($personId);
    if($personId > 0){
        $_SESSION['personId']=$personId;
        //var_dump($_SESSION);
        echo"You are logged in as ".$personId.".<a href='viewPerson.php?personId="
            .$personId."'> Go to ur prof</a>";
        exit;
    }
    else{
        echo "Please enter a valid username and password.";
    }
}
?>
<form action='' method = 'post'>
    <p class= 'Login'>
        username: <input type='username' name='username' value="" required/><br/>
        password: <input type='password' name='password' /><br/>
    <br/><br/>
    <!-- submit button-->
    
    <input type= 'hidden' name='attemptLogin' value='true'/>
    <input type='submit' name='login'/>
</form>