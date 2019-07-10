<?php
function echoHeader($pageTitle, $h1){ 
    echo "
        <html>
            <head>
                <title>".$pageTitle."</title>
                <link rel='stylesheet' type='text/css' href='/style.css'>
            </head>
            <body>
                <div class='menu'>
                    <div class='navbar'>
                      <a href='/login.php'> LogOut </a>
                      <a href='/user.php'> Profile </a>
                      <a href='/jobsForPerson.php'> Jobs </a>
                    </div>
                </div>
            <h1>".$h1."</h1>
                    
                <div class='dropMenu'>
                    <a href= 'dropLink'>Menu</a>
                        <div class='dropDownContent'>
                          <a href='/login.php'> Log Out </a>
                          <a href='/user.php'> Profile </a>
                          <a href='/jobsForPerson.php'> Jobs </a>
                        </div>
                </div>
            </body>
        ";
}
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
function verifyUser(){
    if(isLoggedIn()){
        return true;
    }
    else{
        //header(Location: /'login.php');
        exit;
    }
}

function isLoggedIn(){
    if(isset($_SESSION['personId'])){
        return true;
    }
    else{
        return false;
    }
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
function getJob($jobId){
    $result = dbQuery('
    SELECT *
    FROM jobs
    WHERE jobId = :jobId',
    array('jobId' => $jobId)
    ) -> fetch();
    return $result;
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




//OPTION 1
function updateJobInfo($jobId, $location, $salary, $res, $skills){
    $result = dbQuery(
        'UPDATE jobs
        SET location = :location, salary = :salary, res= :res, skills = :skills
        WHERE jobId = :jobId'
        ,[
            'location' => $location,
            'salary' => $salary,
            'res' => $res,
            'skills' => $skills
        ]
    )->fetch();
    return $result;
}
//OPTION 2
/*function insertJobInfo($jobId, $location, $salary, $res, $skills){
    dbQuery(
        'INSERT INTO jobs(location, salary, res, skills)
        VALUES(:location, :salary, :res, :skills)
        WHERE jobId = :jobId'
        ,[
        'jobId' => $jobId,
        'location' => $location,
        'salary' => $salary,
        'res' => $res,
        'skills' => $skills
        ]
    );
}*/


function softDeleteJob($jobId){
    $result = dbQuery('
        UPDATE jobs
        SET deletedAt = 
        WHERE jobId = :jobId
        ',
        array(
            'jobId' => $jobId
        )
    ) -> fetch();
    return $result;
}