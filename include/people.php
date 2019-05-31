<?php

//get one row of info (profile)
function getProfile($profileId){
    $result = dbQuery('
    SELECT *
    FROM profiles
    Where profileId = :profileId
    ', array(
        'profileId' => $profileId
    )) ->fetch();
    return $result;
}

//get all info (profiles)
function getAllProfiles(){
    $result = dbQuery('
        SELECT *
        FROM profiles
    ')->fetchAll();
    return $result;
}

?>
