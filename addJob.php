<?php
include('config/init.php');
echoHeader('Add a Job', 'Add a Job');
if(isLoggedIn(true)){

if(isset($_REQUEST['addThisJob'])){
    insertJob($_SESSION['personId'], $_REQUEST['company'], $_REQUEST['position']);
}
}
?>
<div class= 'form'>
<form action='' method='post'>
    Company: <input type='company' name='company' /><br/>
    Position: <input type='position' name='position' /><br />
    <br/><br/>
    <input type='submit' name='addThisJob' value='Add Job' />
</form>
</div>