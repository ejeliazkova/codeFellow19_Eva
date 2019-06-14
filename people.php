
<?php
    include('config/init.php');
    echoHeader();


    $people = getAllPeople();
                
    foreach($people as $person){
        echo "<a href='/viewPerson.php?personId=".$person['personId']."'>
            ".$person['name']."
        </a><br /><br />"; 
    }
    
    if(isset($_REQUEST['newProfile'])){
        
        insertPerson($_REQUEST['name'], $_REQUEST['about'], $_REQUEST['user'], $_REQUEST['pass']
        );
    }
?>
    <form action='' method='post'>
        <p class= 'Login'>
            Name: <input type='text' name='name' /><br/>
            About: <input type='text' name='about' /><br />
            User:<input type='text' name='user' /><br />
            Password:<input type='text' name='pass' /><br />
        
        <br/><br/>
        <!-- submit button-->
        <input type='submit' name='newProfile' value='Make a new profile' />
</form>
