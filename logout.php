<?php
include('config/init.php');
$_SESSION = array();
echo"<a href='/index.php'> Log In</a>";
?>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='logoutStyle.css'>
    </head>
        <body>
            <div class="container">
                <div class="logo">
                    JOB INFORMATION
                </div>
                <div class="login-item">
                    <form action="" method="post" class="form form-login">
                        <div class="form-field">
                            <label class="location" for="login-location"><span class="hidden">location</span></label>
                            <input id="login-location" type="text" class="form-input" placeholder="location">
                        </div>
                        <div class="form-field">
                            <label class="salary" for="login-salary"><span class="hidden">Salary</span></label>
                            <input id="login-salary" type="number" class="form-input" placeholder="Salary">
                        </div>
                        <div class="form-field">
                            <label class="res" for="login-res"><span class="hidden">Responsibilities</span></label>
                            <input id="login-res" type="text" class="form-input" placeholder="Responsibilities">
                        </div>
                        <div class="form-field">
                            <label class="skills" for="login-skills"><span class="hidden">Skills</span></label>
                            <input id="login-skills" type="text" class="form-input" placeholder="Skills">
                        </div>
                        <div class="login-item-bottom">
                            <div class="form-field-bottom">
                                <input type="submit" value="Save">
                            </div>
                            <div class="form-field-bottom">
                                <input type="submit" value="Delete">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </body>