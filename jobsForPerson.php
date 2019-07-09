<?php
include('config/init.php');
echoHeader('Your Jobs List', 'Your Jobs List');
if(isLoggedIn(true)){

    $jobs=getJobsForPerson($_SESSION['personId']);
    echo"<br/><br/>";
    echo "Jobs: ";
    foreach($jobs as $index => $job){
        $num = $index + 1;
        echo"<br/>";
        echo $num.". ";
        echo $job['position']." at ".$job['company'];
        echo "
            <form action='' method = 'post'>
                <input type= 'hidden' name='addJobInfo' value='true'/>
                <input type= 'submit' name='addJobInfo' value='Edit Info'/>
            </form>
            <form action='' method = 'post'>
                <input type= 'hidden' name='deleteJob' value='true'/>
                <input type= 'submit' name='deleteJob' value='Delete'/>
            </form>
        ";
        if(isset($_REQUEST['addJobInfo'])){
            header("Location: /addJobInfo.php");
            
        }
        //var_dump($job['jobId']); correctly dumps the id of the job
        $jobId = $job['jobId'];
        if(isset($_REQUEST['deleteJob'])){
            softDeleteJob($jobId);
        }

    }
    echo"<form action='' method = 'post'>
    <input type= 'hidden' name='addAJob' value='true'/>
    <input type= 'submit' name='addAJob' value='Add a Job'/>
    </form
    ";
    if(isset($_REQUEST['addAJob'])){
        header("Location: /addJob.php");
    }
    exit;
}