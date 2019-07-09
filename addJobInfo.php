<?php
include('config/init.php');
echoHeader('Edit Job Info', 'Edit Job Info');

if(isLoggedIn(true)){
    $jobs=getJobsForPerson($_SESSION['personId']);
    
    $job = getJob($jobs['index']);

    echo"
    <div class= 'form'>
    <form action='' method = 'post'>
    <input type= 'text' name='location' value='Location' />
    <input type= 'text' name='salary' value='Salary'/>
    <input type= 'text' name='responsibilities' value='Responsibilities'/>
    <input type= 'text' name='skills' value='Skills'/>
    <input type= 'hidden' name='saveJobInfo' value='true'/>
    <input type= 'submit' name='saveJobInfo' value='Save'/>
    </form>
    </div";

if(isset($_REQUEST['saveJobInfo'])){
    insertJobInfo($job['jobId'], $_REQUEST['location'], $_REQUEST['salary'], $_REQUEST['responsibilities'], $_REQUEST['skills']);
}
}