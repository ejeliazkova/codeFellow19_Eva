<?php
include('config/init.php');
echoHeader('Projects', 'My projects');

if(isset($_REQUEST['newProfile'])){
    insertProfile(
        $_REQUEST['name'],
        $_REQUEST['occupation'],
        $_REQUEST['school'],
        $_REQUEST['username'],
        $_REQUEST['password']
    );
}
?>
<div class='pageWrapper2'>
    <form action='' method='post'>
        <p class= 'Login'> 
            Name: <input type='text' name='name' />
            <br/>
            Occupation: <input type='text' name='occupation' />
            <br />
            <select name='school'>
                <option value='default'>- School -</option>
                <option value='WashU'>WashU</option>
                <option value='SLU'>SLU</option>
                <option value='Webster'>Webster</option>
                <option value='Mizzou'>Mizzou</option>
                <option value='other'>Other</option>
            </select>
            <br/>
            User:<input type='text' name='username' />
            <br />
            Password:<input type='text' name='password' />
            <br />
            <br/><br/>
            <!-- submit button-->
            <input type='submit' name='newProfile' value='Make a new profile' />
    </form>
</div>
