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
        <div class= loginWindowTitle>
            <h2>Login</h2>
        </div>
        <form action='' method = 'post'>
            <input type='username' placeholder= 'username' name='username' required/><br/>
            <input type='password' placeholder= 'password' name='password' /><br/>
            <div class='lower'>
                <input type= 'hidden' name='attemptLogin' value='true'/>
                <input class='button' type='submit' name='login'/>
            </div>
        </form>
    </div>

    <a href="#" class="js-open-modal">open modal</a>
    <div class="modal">
        <div class="modal__header">modal header
            <a href="#" class="js-close-modal">X</a>
        </div>
        <p>
            hey there, I'm the modal
        </p>

    </div>
    <script>
        $(".js-open-modal").click(function(){
            $(".modal").addClass("visible");
        });
        $(".js-close-modal").click(function(){
            $(".modal").removeClass("visible");
        });
//if you click on anything except the modal itself or the "open modal" link, close the modal
        $(document).click(function(event) {
            if (!$(event.target).closest(".modal,.js-open-modal").length) {
                $("body").find(".modal").removeClass("visible");
            }
        });
    </script>
    </body>