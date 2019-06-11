<?php

//#2: GET one person
function getPerson($personId){
    $result = dbQuery('
        SELECT *
        FROM people
        WHERE personId = :personId',

        ['personId' => $personId]
    ) -> fetch();

    return $result;
}

//#3: GET all people
function getAllPeople(){
    $result = dbQuery('
        SELECT*
        FROM people'
    ) -> fetchAll();

    return $result;
}

#4: GET specific jobs
function getSpecificJobs($personId, $jobId){
    $result = dbQuery('
    SELECT personId *
    FROM people
    INNER JOIN jobId ON people.personId = jobs.jobId');
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

function echoJobManager($jobs){
    echo" 

    <body>

        <div class= 'parent1'>
            <div class= 'childB'>
                <h2>Jobs<h2>
                <p>['company''position']</p>

                <p>['company''position']</p>

            </div>
        </div>
    </body>
    
    ";
}


?>