<?php

function attemptLogin($username, $password){
    $result = dbQuery('
        SELECT *
        FROM people
        WHERE username = :username
        AND password = :password',
        array('username' => $username,
        'password' => $password)
    ) -> fetch();
    return $result;
}

// PEOPLE
function getPerson($personId){
    $result = dbQuery('
        SELECT *
        FROM people
        WHERE personId = :personId',
        array('personId' => $personId)
    ) -> fetch();

    return $result;
}
function getAllPeople(){
    $result = dbQuery('
        SELECT *
        FROM people'

    ) -> fetchAll();

    return $result;
}

// JOBS
function getJob($jobId){
    $result = dbQuery('
        SELECT *
        FROM jobs
        WHERE jobId = :jobId',
        array('jobId' => $jobId)
    ) -> fetch();

    return $result;
}
function getSpecificJobs($personsId){
    $result = dbQuery('
        SELECT *
        FROM jobs
        WHERE personsId = :personId',
        array('personId' => $personsId)
    ) -> fetchAll();
        return $result;
}
function echoJobs($personId){
    echo "Job: ".$personId[''];
}


function insertPerson($name, $about, $username, $password){
    dbQuery(
        'INSERT INTO people(name, about, username, password)
        VALUES(:name, :about, :username, :password)',
        [
        'name' => $_REQUEST['name'],
        'about' => $_REQUEST['about'],
        'username' => $_REQUEST['username'],
        'password' => $_REQUEST['password']
        ]
    );
}


function echoHeader(){
    echo"
        <head>
            <link rel='stylesheet' type='text/css' href='style.css'>
            <title> Job planner</title>
        </head>
    <body>
    
        <h1>ME WANT JOB</h1>
        <div class= 'parent1'>
            <div class= 'childA'>
                <h2> People </h2>

            </div>
            
            <div class= 'childB'>
                <h2>My List<h2>
            </div>
        </div>
    </body>
                
    ";
}

function echoTaskManager($people){
    echo" 
    <head>
            <link rel='stylesheet' type='text/css' href='style.css'>
            <title> Task manager</title>
        </head>
    <body>
    
        <h1>Tasks</h1>
        <div class= 'parent1'>
            <div class= 'childA'>
                <h2>".$people['name']."</h2>
                <p>".$people['about']."</p>
            </div>
            
            
        </div>
    </body>
    
    ";
}
