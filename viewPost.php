 <?php
    include('config/init.php');

    $result = getAllProfiles();
    var_dump($result);


   $profile = getProfile();
    
   echoHeader("_".$profile['name'], 'the first profile page');
 
?> 
