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
function getSpecificJobs($personId){
    $result = dbQuery('
        SELECT *
        FROM jobs
        WHERE personId = :personId',
        array('personId' => $personId)
    ) -> fetchAll();
        return $result;
}
function echoJobs($personId){
    echo"Job: ".$personId[''].";
}

// #1: INSERT NEW
function insertPerson($name, $about, $user, $pass){
    
    dbQuery(
        'INSERT INTO people(name, about, user, pass)
        VALUES(:name, :about, :user, :pass)',
        [
        'name' => $_REQUEST['name'],
        'about' => $_REQUEST['about'],
        'user' => $_REQUEST['user'],
        'pass' => $_REQUEST['pass']
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
