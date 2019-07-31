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
        <div class='loginWindow'>  
            <div class='loginWindowContents'>
                <div class= 'loginChild'>
                    <h2>Login</h2>
                </div>
                <form action='' method = 'post'>
                    <div class='loginChild'>
                        <input type='username' id= 'loginUser' placeholder= 'username' name='username' required/>
                    </div>
                    <div class='loginChild'>
                        <input type='password' id= 'loginPassword' placeholder= 'password' name='password'/>
                    </div>
                    <div class='loginChild'>
                        <input type= 'hidden' name='attemptLogin' value='true'/>
                        <input class='button' id= 'loginButton' type='submit' name='login'/>
                    </div>
                </form>
            </div>
        </div>
    </body>