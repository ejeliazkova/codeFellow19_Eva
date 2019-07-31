<?php
include('config/init.php');
verifyUser();
echo $_SESSION['personId'];
echo
$job = getJob($_GET['jobId']);
if(isset($_REQUEST['addAJob'])){
    header("Location: /addJob.php");
}
if(isset($_POST['saveJobInfo'])){
    updateJobInfo($job['jobId'], $_POST['location'], $_POST['salary'], $_POST['res'], $_POST['skills']);
    var_dump($job['jobId'], $_POST['location'], $_POST['salary'], $_POST['res'], $_POST['skills']);
    //header("Location: /jobsForPerson.php?jobId=$job[jobId]");
}

if(isset($_POST['deleteJob'])){
    softDeleteJob($job['jobId']);
    echo"Go to jobs page and you will see that this job has been D E L E T E D";
    header("Location: /jobsForPerson.php");

}

$jobs=getJobsForPerson($_SESSION['personId']);
echoTaskHeader('Your Jobs List', 'Your Jobs List');
echo"<br/><br/>";

foreach($jobs as $index => $job){
    echo"
    <div class= 'jobWrapper'>
        <p class= 'jobs'>".($index+1).". ".$job['position']." at ".$job['company']."  
            <a href='#' onclick='openModal($job[jobId])'>Edit Info</a>
            <div class= 'modal' id='modal_$job[jobId]'>
                <div class= 'modalHeader'>
                    <a href='#' class='js-close-modal'  onclick='closeModal($job[jobId])'>X</a>
                </div>

                <form action='' method = 'post'>
                    <input type= 'hidden' name='jobId' value'".$job['jobId']."'/>
                    <input type= 'text' name='location' placeholder='location' value = '".$job['location']."'/>
                    <input type= 'text' name='salary' placeholder='salary' value = '".$job['salary']."'/>
                    <input type= 'text' name='res' placeholder='responsibilities' value = '".$job['res']."'/>
                    <input type= 'text' name='skills' placeholder='skills' value = '".$job['skills']."'/>
                    <input type= 'submit' name='saveJobInfo' value='Save'/>
                    <input type= 'submit' name='deleteJob' value='Delete'/>
                </form>
            </div>
        </p>
    </div>
    ";
}
echo"<form action='' method = 'post'>
    <input type= 'hidden' name='addAJob' value='true'/>
    <input type= 'submit' name='addAJob' value='Add a Job'/>
    </form>
";
?>
