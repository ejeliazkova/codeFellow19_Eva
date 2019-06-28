<?php
include('config/init.php');
echo "<a href='/login.php'> Go Back </a> <br/> <br/>";

$person = getPerson($_SESSION['personId']);
//$_SESSION['personId']=$personId;
echo"A little bit about ".$person['name'].": ".$person['about'];
//var_dump($_SESSION);

if(isset($_REQUEST['jobView'])){
    $jobView=getJobsForPerson($_SESSION['personId']);
    //$_SESSION['jobView']=$jobView;
    var_dump($jobView);
    //foreach($jobView as $job){
        echo"Jobs: ".$jobView['position']." at ".$jobView['company'];
    //}
    exit;
}
if(isset($_REQUEST['addJob'])){
    insertJob($company, $position);
}
?>
<form action='' method = 'post'>
    <input type= 'hidden' name='jobView' value='true'/>
    <input type= 'submit' name='Jobs' value='Jobs'/>

</form>

<form action='' method = 'post'>
    <input type= 'text' name='company' value='Company' />
    <input type= 'text' name='position' value='Position'/>
    <input type= 'hidden' name='addJob' value='true'/>
    <input type= 'submit' name='addJob' value='Add a Job'/>
</form>


   

