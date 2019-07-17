<?php
include('config/init.php');
verifyUser();
$job = getJob($_GET["jobId"]);

if(isset($_POST['saveJobInfo'])){
    updateJobInfo($job['jobId'], $_POST['location'], $_POST['salary'], $_POST['res'], $_POST['skills']);
    header("Location: /addJobInfo.php?jobId=$job[jobId]");
}

if(isset($_POST['deleteJob'])){
    softDeleteJob($job['jobId']);
    echo"Go to jobs page and you will see that this job has been D E L E T E D";
    header("Location: /jobsForPerson.php");

}
echoTaskHeader('Job Info', $job['position']." at ".$job['company']);

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