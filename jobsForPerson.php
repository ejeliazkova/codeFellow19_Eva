<?php
include('config/init.php');
verifyUser();
if(isset($_REQUEST['addAJob'])){
    header("Location: /addJob.php");
}

$jobs=getJobsForPerson($_SESSION['personId']);
echoTaskHeader('Your Jobs List', 'Your Jobs List');
echo"<br/><br/>";
echo "Jobs: ";
foreach($jobs as $index => $job){
    echo"<br/>";
    echo ($index+1).". ";
    echo $job['position']." at ".$job['company'];
    echo "
        <a href='/addJobInfo.php?jobId=".$job['jobId']."'> Edit Info </a><br/><br/>
    ";
}
echo"<form action='' method = 'post'>
    <input type= 'hidden' name='addAJob' value='true'/>
    <input type= 'submit' name='addAJob' value='Add a Job'/>
    </form
";