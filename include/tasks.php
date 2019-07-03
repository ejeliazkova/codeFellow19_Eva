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
function insertPerson($name, $about, $username, $password){
    dbQuery(
        'INSERT INTO people(name, about, username, password)
        VALUES(:name, :about, :username, :password)',
        [
        'name' => $name,
        'about' => $about,
        'username' => $username,
        'password' => $password
        ]
    );
}

function getJobsForPerson($personId){
    $result = dbQuery('
        SELECT *
        FROM jobs
        WHERE personId = :personId',
        array('personId' => $personId)
    ) -> fetchAll();
        return $result;
}

function insertJob($personId, $company, $position){
    dbQuery(
        'INSERT INTO jobs(personId, company, position)
        VALUES(:personId, :company, :position)',
        [
        'personId' => $personId,
        'company' => $company,
        'position' => $position
        ]
    );
}
/*function removeJob($jobId){
    $result = dbQuery('
        SELECT*
        FROM jobs
        WHERE jobId = :jobId',
        array('jobId' => $jobId)
    ) -> fetch();
    return $result;
}*/





