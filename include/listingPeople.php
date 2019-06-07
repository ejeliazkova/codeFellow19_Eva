<?php

// #1: INSERT NEW
function insertPeople($name, $about){
    dbQuery(
        'INSERT INTO people(name, about)
        VALUES(:name, :about)',
        [
        'name' => $_REQUEST['name'],
        'about' => $_REQUEST['about']
        ]
    );
}

//#2: GET one item
function getPerson($peopleId){
    $result = dbQuery('
        SELECT *
        FROM people
        WHERE peopleId = :peopleId',

        ['peopleId' => $peopleId]
    ) -> fetch();

    return $result;
}

//#3: GET all items
function getAllPeople(){
    $result = dbQuery('
        SELECT*
        FROM people'
    ) -> fetchAll();

    return $result;
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




?>