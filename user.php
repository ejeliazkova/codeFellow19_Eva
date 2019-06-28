<?php
include('config/init.php');
echo "<a href='/login.php'> Log Out </a> <br/> <br/>";

if(isset($_REQUEST['/login.php'])){
    session_destroy();
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
    }
    exit;
}

if(isset($_REQUEST['addJob'])){
    insertJob($person['personId']);

}
?>
<!--could be a link or just a get request bc post is saving-->
<form action='' method = 'get'>
    <input type= 'hidden' name='jobView' value='true'/>
    <input type= 'submit' name='Jobs' value='Jobs'/>

</form>

<form action='' method = 'post'>
    <input type= 'text' name='company' value='Company' />
    <input type= 'text' name='position' value='Position'/>
    <input type= 'hidden' name='addJob' value='true'/>
    <input type= 'submit' name='addJob' value='Add a Job'/>
</form>


   

