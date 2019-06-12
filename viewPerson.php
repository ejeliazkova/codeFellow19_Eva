<?php
    include('config/init.php');
    $result = getAllPeople();
    
    $person = getPerson($_GET['id']);
    
   echoTaskManager($person);

   //$jobs = getSpecificJobs($_GET['jobId']);
   //echoJobManager($jobs);

   

