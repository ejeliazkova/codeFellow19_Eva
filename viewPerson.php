<?php
include('config/init.php');
echo "<a href='/login.php'> Go Back </a> <br/> <br/>";

//var_dump($_SESSION['personId']['personId']);
echo"For user: ".$_SESSION['personId']['name']." these are the options:";

$personsId = $_SESSION['personId']['personId'];
getSpecificJobs($personsId);
//var_dump(echoJobs($_SESSION ['personId']['personId']));
//echo"the jobs are ".$_SESSION['personId']['personId']." for dis girl.";
/*foreach($theJob as $oneJob){
    echo" " .$oneJob['company']." as a ".$oneJob['position'];
}
if(isset($_REQUEST['add'])){
        
    insertPerson($_REQUEST['name'], $_REQUEST['about'], $_REQUEST['username'], $_REQUEST['password']
    );
}*/

   

