<?php
include('config/init.php');
echo "<a href='/login.php'> Go Back </a> <br/> <br/>";

$personId=getPerson($_REQUEST['personId']);
$_SESSION['personId']=$personId;
echo"A little bit about ".$_SESSION['personId']['name'].": ".$_SESSION['personId']['about'];

if(isset($_REQUEST['jobView'])){
    $jobView=getSpecificJobs($_REQUEST['personId']);
    $_SESSION['jobView']=$jobView;
    
    //foreach($jobView as $jobViews){
        echo"Jobs: ".$_SESSION['jobView']['position']." at ".$_SESSION['jobView']['company'];
    //}
    exit;
}
?>
<form action='' method = 'post'>
    <input type= 'hidden' name='jobView' value='true'/>
    <input type= 'submit' name='Jobs' value='Jobs'/>

</form>


   

