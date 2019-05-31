<?php

//get the id of the blog post in the array of Blog Posts
function getProfile($profileId){
    
    $allProfiles = getAllProfiles();    
    
    return $allProfiles[$profileId];
}

//get all of the info (id, content, title) of the blog posts in the array of Blog Posts
function getAllProfiles(){
    
    $allProfiles = [
        1 => [
            'profileId' => 1,
            'name' => "Eva Jeliazkova",
            'occupation' => "intern at LACRM",
            'school' => "WashU",
            'username' => "eva",
            'password' => "evaPass"
        ],
        2 => [
            'profileId' => 2,
            'name' => "Stephanie Gurevich",
            'occupation' => "part-time employee at Edible Arrangements",
            'school' => "SLU",
            'username' => "steph",
            'password' => "stephPass"
        ],
        3 => [
            'profileId' => 3,
            'name' => "Christina Walsh",
            'occupation' => "nanny",
            'school' => "Mizzou",
            'username' => "christina",
            'password' => "christinaPass"
        ],
        4 => [
            'profileId' => 4,
            'name' => "Jessie Rich",
            'occupation' => "intern at ACLU",
            'school' => "WashU",
            'username' => "jes",
            'password' => "jesPass"
        ],
        5 => [
            'profileId' => 5,
            'name' => "Claire Cvengros",
            'occupation' => "employee at Brookfield Zoo",
            'school' => "WashU",
            'username' => "claire",
            'password' => "clairePass"
        ]
    ];
  
return $allProfiles; 
}
