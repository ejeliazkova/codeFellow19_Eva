<?php
include('config/init.php');

echo "<a href='/people.php'> Go Back </a> <br /> <br />";

$person = getPerson($_GET['personId']);

$theJob = getSpecificJobs($person['personId']);

echoTaskManager($person);
 
foreach($theJob as $oneJob){
    echo"these are my options:" .$oneJob['company']." as a ".$oneJob['position'];
}

   

