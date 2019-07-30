<?php
include('config/init.php');
verifyUser();
if(isset($_REQUEST['addAJob'])){
    header("Location: /addJob.php");
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
                <form action='' method = 'post'>$job[jobId]
                    
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
