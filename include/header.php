<?php
    function echoHeader($pageTitle){
        echo "
            <html>
                <head>
                    <title>".$pageTitle."</title>
                    <link rel='stylesheet' type='text/css' href='stylin.css'>
                </head>
                <body>
                    <div class='Menu'>
                        <div class='navbar'>
                            <a href='hello.php'>Home</a>
                            <a href='about.php'>About</a>
                            <a href='projects.php'>Projects</a>
                            <a href='travel.php'>Travel</a>
                            <a href='contact.php'>Contact</a>
                        </div>
                    </div>
            
                        
                    <div class='dropMenu'>
                        <a href= 'dropLink'>Menu</a>
                            <div class='dropDownContent'>
                                <a href='about.php'>About</a>
                                <a href='projects.php'>Projects</a>
                                <a href='travel.php'>Travel</a>
                                <a href='contact.php'>Contact</a>
                            </div>
                    </div>
                </body>
            ";
    }
?>