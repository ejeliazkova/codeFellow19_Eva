<?php
    include('config/init.php');

    $people = getAllPeople();           
    foreach($people as $person){
        echo "<a href='/viewPerson.php?personId=".$person['personId']."'>
            ".$person['name']."
        </a><br /><br />"; 
    }
    
    if(isset($_REQUEST['newProfile'])){
        insertPerson($name, $about, $username, $password);
    }
?>
<form action='' method='post'>
    <p class= 'Login'>
        Name: <input type='text' name='name' /><br/>
        About: <input type='text' name='about' /><br />
        Username:<input type='text' name='username' /><br />
        Password:<input type='text' name='password' /><br />
        <br/><br/>
        <!-- submit button-->
        <input type='submit' name='newProfile' value='Make a new profile' />
</form>
