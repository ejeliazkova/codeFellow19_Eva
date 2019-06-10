<?php
    include('config/init.php');
    $result = getAllPeople();
    
    $person = getPerson($_GET['personId']);
    //$job = getSpecificJobs($_GET[])
   echoTaskManager($person);

   

