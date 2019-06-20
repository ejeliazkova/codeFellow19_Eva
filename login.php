<?php
include('config/init.php');
echo"Login please";
?>

<form action='' method = 'post'>
    <p class= 'Login'>
        username: <input type='text' name='username' /><br/>
        password: <input type='text' name='password' /><br/>
    <br/><br/>
    <!-- submit button-->
    <button onclick= "location.href='viewPerson.php'"> Enter</button>
</form>