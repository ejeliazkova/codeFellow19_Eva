<?php
include('config/init.php');
echo "<a href='/login.php'> Log Out </a> <br/> <br/>";

if(isset($_REQUEST['/login.php'])){
    session_destroy();
    //redirect to login page without destroying page
}

$person = getPerson($_SESSION['personId']);
echo"A little bit about ".$person['name'].": ".$person['about'];

if(isset($_REQUEST['jobView'])){
    $jobs=getJobsForPerson($person['personId']);
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
            <input type= 'submit' name='addJobInfo' value='Add Info'/>
            </form>
            <form action='' method = 'post'>
            <input type= 'hidden' name='editJob' value='true'/>
            <input type= 'submit' name='editJob' value='Edit Job'/>
            </form>
        ";
        /*if(isset($_REQUEST['removeJob'])){
            $goneJob=removeJob($job['jobId']);

        }*/
        if(isset($_REQUEST['addJobInfo'])){
            echo"<form action='' method = 'post'>
            <input type= 'text' name='location' value='Location' />
            <input type= 'text' name='salary' value='Salary'/>
            <input type= 'text' name='responsibilities' value='Responsibilities'/>
            <input type= 'text' name='skills' value='Skills'/>
            <input type= 'hidden' name='saveJobInfo' value='true'/>
            <input type= 'submit' name='saveJobInfo' value='Save'/>
            </form>";
        }
        if(isset($_REQUEST[]))

    }
    echo"<form action='' method = 'post'>
    <input type= 'text' name='company' value='Company' />
    <input type= 'text' name='position' value='Position'/>
    <input type= 'hidden' name='addJob' value='true'/>
    <input type= 'submit' name='addJob' value='Add a Job'/>
    </form>";
    if(isset($_REQUEST['addJob'])){
        $thisJob = insertJob($person['personId'], $_REQUEST['company'], $_REQUEST['position']);
        //php redirect page using header();
    }
    exit;
}

?>
<!--could be a link or just a get request bc post is saving-->
<form action='' method = 'get'>
    <input type= 'hidden' name='jobView' value='true'/>
    <input type= 'submit' name='Jobs' value='Jobs'/>

</form>

   

