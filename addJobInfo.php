<?php
include('config/init.php');
isLoggedIn();
$job = getJob($_GET["jobId"]);

if(isset($_REQUEST['saveJobInfo'])){
    updateJobInfo($job['jobId'], $_POST['location'], $_POST['salary'], $_POST['res'], $_POST['skills']);
}      
if(isset($_REQUEST['deleteJob'])){
    softDeleteJob($job['jobId']);
}
echoHeader('Job Info', $job['position']." at ".$job['company']);


    echo"
    <div class= 'form'>
        <form action='' method = 'post'>
            <input type= 'text' name='location' placeholder='location' value = '".$job['location']."'/>
            <input type= 'text' name='salary' placeholder='salary' value = '".$job['salary']."'/>
            <input type= 'text' name='res' placeholder='responsibilities' value = '".$job['res']."'/>
            <input type= 'text' name='skills' placeholder='skills' value = '".$job['skills']."'/>
            <input type= 'hidden' name='saveJobInfo' value='true'/>
            <input type= 'submit' name='saveJobInfo' value='Save'/>

        <form action='' method = 'post'>
            <input type= 'hidden' name='deleteJob' value='true'/>
            <input type= 'submit' name='deleteJob' value='Delete'/>
        </form>
            <input type= 'hidden' name='jobId' value='".$job['jobId']."'/>
        </form>
    </div";