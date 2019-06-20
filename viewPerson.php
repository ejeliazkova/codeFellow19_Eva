<?php
include('config/init.php');
echo "<a href='/people.php'> Go Back </a> <br /> <br />";

$person = getPerson($_GET['personId']);
$theJob = getSpecificJobs($person['personId']);

echoTaskManager($person);
 
echo"these are my options:";

foreach($theJob as $oneJob){
    echo" " .$oneJob['company']." as a ".$oneJob['position'];
}
if(isset($_REQUEST['add'])){
        
    insertPerson($_REQUEST['name'], $_REQUEST['about'], $_REQUEST['user'], $_REQUEST['pass']
    );
}
?>

<form action='' method = 'post'>
    <p class= 'Login'>
    Next Step: <select name='next step'>
        <option value='default'>- -</option>
        <option value='Job Title'> Job Title</option>
        <option value='Information'> Information</option> 
        <option value='Documents'>Documents</option>
        <option value='Status'>Status</option> 
    </select>
    <br/><br/>
    <!-- submit button-->
    <input type='submit' name='add' value='add' />
</form>

   

