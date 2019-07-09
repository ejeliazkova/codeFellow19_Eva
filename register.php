<?php
    include('config/init.php');
    echoHeader('Register', 'Register');
    if(isset($_REQUEST['newProfile'])){
        insertPerson($_REQUEST['name'], $_REQUEST['about'], $_REQUEST['username'], $_REQUEST['password']);
    }
?>
<div class= 'form'>
    <form action='' method='post'>
        Name: <input type='text' name='name' /><br/>
        About: <input type='text' name='about' /><br />
        Username:<input type='text' name='username' /><br />
        Password:<input type='text' name='password' /><br />
        <br/><br/>
        <!-- submit button-->
        <input type='submit' name='newProfile' value='Make a new profile' />
    </form>
</div>
