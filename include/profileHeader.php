<?php
    function echoHeader($pageTitle, $h1){ 
        echo "
            <html>
                <head>
                    <title>".$pageTitle."</title>
                    <link rel='stylesheet' type='text/css' href='style.css'>
                </head>
                <body>
                    <div class='menu'>
                        <div class='navbar'>
                          <a href='/login.php'> Log Out </a>
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
?>