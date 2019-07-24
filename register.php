<?php
    include('config/init.php');
    echoTaskHeader('Register', 'Register');
    
    
    if(isset($_REQUEST['newProfile'])){
        //$salt = bin2hex(random_bytes(32));
        insertPerson($_REQUEST['name'], $_REQUEST['about'], $_REQUEST['username'], sha1($_REQUEST['password']));
        echo"Go to the login page and sign in to see your profile!";
    }
?>
<div class= 'rpage'>
    <form action='' method='post'>
        <label for="name">Name:</label>
        <input type='text' name='name' /><br/>
        <label for="about">About:</label>
        <input type='text' name='about' /><br />
        <label for="username">Username:</label>
        <input type='text' name='username' /><br />
        <label for="password">Password:</label>
        <input type='text' name='password' /><br />
        <br/><br/>
        <!-- submit button-->
        <input type='submit' name='newProfile' value='Create' />
    </form>
</div>
