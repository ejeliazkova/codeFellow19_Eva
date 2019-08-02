<?php
include('config/init.php');
verifyUser();
$jobs=getJobsForPerson($_SESSION['personId']);

echoTaskHeader('Your Jobs List', 'Your Jobs List');
echo"<br/><br/>";

foreach($jobs as $index => $job){
    //echo''.$job['jobId'].'';
    if(isset($_POST['saveJobInfo'])){
        updateJobInfo($job['jobId'], $_POST['location'], $_POST['salary'], $_POST['res'], $_POST['skills']);
        header('Location: /addJobInfo.php?jobId=$job[jobId]');
    }
    
    if(isset($_POST['deleteJob'])){
        softDeleteJob($job['jobId']);
        echo"Go to jobs page and you will see that this job has been D E L E T E D";
        header('Location: /jobsForPerson.php');
    
    }
    echo"
    <div class= 'jobWrapper'>
        <p class= 'jobs'>".($index+1).". ".$job['position']." at ".$job['company']."  
            <a href='#' onclick='openModal($job[jobId])'>Edit Info</a>
            <div class= 'modal' id='modal_$job[jobId]'>
                <div class= 'modalHeader'>
                    <a href='#' class='js-close-modal'  onclick='closeModal($job[jobId])'>X</a>
                </div>

                <div class='container'>
                    <div class='logo'>
                        JOB INFORMATION
                    </div>
                    <div class='login-item'>
                        <form action='' method='post' class='form form-login'>
                            <div class='form-field'>
                                <label class='location' for='login-location'><span class='hidden'>location</span></label>
                                <input id='login-location' type='text' class='form-input' placeholder='location'>
                            </div>
                            <div class='form-field'>
                                <label class='salary' for='login-salary'><span class='hidden'>Salary</span></label>
                                <input id='login-salary' type='number' class='form-input' placeholder='Salary'>
                            </div>
                            <div class='form-field'>
                                <label class='res' for='login-res'><span class='hidden'>Responsibilities</span></label>
                                <input id='login-res' type='text' class='form-input' placeholder='Responsibilities'>
                            </div>
                            <div class='form-field'>
                                <label class='skills' for='login-skills'><span class='hidden'>Skills</span></label>
                                <input id='login-skills' type='text' class='form-input' placeholder='Skills'>
                            </div>
                            <div class='login-item-bottom'>
                                <div class='form-field-bottom'>
                                    <input type='submit' value='Save'>
                                </div>
                                <div class='form-field-bottom'>
                                    <input type='submit' value='Delete'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </p>
    </div>
    ";
}
echo"<form action='' method = 'post'>
    <input type= 'hidden' name='addAJob' value='true'/>
    <input type= 'submit' name='addAJob' value='Add a Job'/>
    </form>";