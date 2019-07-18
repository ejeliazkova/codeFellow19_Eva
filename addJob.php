<?php
include('config/init.php');
verifyUser();
if(isset($_REQUEST['addThisJob'])){
    insertJob($_SESSION['personId'], $_REQUEST['company'], $_REQUEST['position']);
    header("Location: /jobsForPerson.php");
}
echoTaskHeader('Add a Job', 'Add a Job');
?>
<div class= 'form'>
<form action='' method='post'>
    Company: <input type='company' name='company' /><br/>
    Position: <input type='position' name='position' /><br />
    <br/><br/>
    <input type='submit' name='addThisJob' value='Add Job' />
</form>
</div>