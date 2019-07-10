<?php
include('config/init.php');
echoHeader('Your Jobs List', 'Your Jobs List');
if(isLoggedIn(true)){
    if(isset($_REQUEST['addAJob'])){
        header("Location: /addJob.php");
    }

    $jobs=getJobsForPerson($_SESSION['personId']);
    echo"<br/><br/>";
    echo "Jobs: ";
    foreach($jobs as $index => $job){
        $num = $index + 1;
        echo"<br/>";
        echo $num.". ";
        echo $job['position']." at ".$job['company'];
        echo "
            <a href='/addJobInfo.php?jobId=".$job['jobId']."'> Edit Info </a><br/><br/>
        ";
    }

}
echo"<form action='' method = 'post'>
    <input type= 'hidden' name='addAJob' value='true'/>
    <input type= 'submit' name='addAJob' value='Add a Job'/>
    </form
";