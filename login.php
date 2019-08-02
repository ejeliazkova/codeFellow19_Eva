<?php
include('config/init.php');
if(isset($_REQUEST['attemptLogin'])){
    $personId = attemptLogin($_REQUEST['username'], sha1($_REQUEST['password']));
    
    if($personId > 0){
        $_SESSION['personId']=$personId;
        header("Location: /user.php");
        exit;
    }
    else{
        echo "Please enter a valid username and password.";
    }
}
?>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>
        <div class=register>
            <a href='/register.php'>Register</a>
        </div>

        <div class='form'>   
            <form action='' method = 'post'>
                username: <input type='username' name='username' value="" required/><br/>
                password: <input type='password' name='password' /><br/>
            <br/><br/>
                <input type= 'hidden' name='attemptLogin' value='true'/>
                <input type='submit' class= button name='login'/>
            </form>
        </div>
    </body>