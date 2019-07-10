<?php
include('config/init.php');
isLoggedIn();
$job = getJob($_GET["jobId"]);
echoHeader('Job Info', $job['position']." at ".$job['company']);

if(isset($_POST['saveJobInfo'])){
    updateJobInfo($job['jobId'], $_POST['location'], $_POST['salary'], $_POST['res'], $_POST['skills']);
}

if(isset($_POST['deleteJob'])){
    softDeleteJob($job['jobId']);
    echo"Go to jobs page and you will see that this job has been D E L E T E D";
}
echo"
    <div class= 'form'>
        <form action='' method = 'post'>
            <input type= 'text' name='location' placeholder='location' value = '".$job['location']."'/>
            <input type= 'text' name='salary' placeholder='salary' value = '".$job['salary']."'/>
            <input type= 'text' name='res' placeholder='responsibilities' value = '".$job['res']."'/>
            <input type= 'text' name='skills' placeholder='skills' value = '".$job['skills']."'/>
            <input type= 'submit' name='saveJobInfo' value='Save'/>
            <input type= 'submit' name='deleteJob' value='Delete'/>
        </form>
    </div>
";