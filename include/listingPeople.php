<?php

function attemptLogin($username, $password){
    $result = dbQuery('
        SELECT personId
        FROM people
        WHERE username = :username
        AND password = :password',
        array('username' => $username,
        'password' => $password)
    ) -> fetch();
    return @$result['personId'];
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
    

function getSpecificJobs($personId){
    $result = dbQuery('
        SELECT *
        FROM jobs
        WHERE personId = :personId',
        array('personId' => $personId)
    ) -> fetch();
        return $result;
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

