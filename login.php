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
        <h1>Plant a Seed</h1>
        <div class='navbar'>
            <a href='login.php'>Home</a>
            <a href='register.php'>Register</a>
            <a href='contact.php'>Contact</a>
        </div>
    <div class='homepage'>  
        <div class= loginTitle>
            <h2>Login</h2>
        </div>
        <form action='' method = 'post'>
            <label for="username">Username:</label>
            <input type='username' name='username' required/><br/>
            <label for="password">Password:</label>
            <input type='password' name='password' /><br/>
            <div class='lower'>
                <input type= 'hidden' name='attemptLogin' value='true'/>
                <input class='button' type='submit' name='login'/>
            </div>
        </form>
    </div>
    </body>