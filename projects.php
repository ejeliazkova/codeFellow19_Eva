<html>


<body>

    <?php
        include('config/init.php');
        echoHeader('Projects', 'My projects');
    ?>
    
    <div class='BlockNone'>
        <div class="projectParent">
           
            <div class="child_1">
                <h2>LACRM</h2>
                <p>Less Annoying CRM Summer '19 Coding<br> Fellowship Program in St. Louis, MO</p>
                
                <a href="fellowship.php"> 
                    <div class="companyLogo" alt="HTML tutorial"></div>
                </a>
            </div>
            
            <div class="child_2">
                <h2>BioSURF</h2>
                <p>Washington University Biology Summer '18 <br> Undergraduate Research Fellowship Program</p>
                
                <a href="tracing.php">
                    <div class="companyLogo" alt="HTML tutorial"></div>
                </a>
            </div>

        </div>
    </div>
    <?php
        $profiles = getAllProfiles();
        echo "
            <h3>Check out all these people</h3>
            ";                                                    //something wrong with $profiles or $profile b/c
        foreach($profiles as $profile){                           //apparently the args in FOREACH are invalid 
            echo "<a href='/viewPost.php?profileId=".$profile['profileId']."'>
                ".$profile['name']."
            </a><br />";
        }
    ?>
</body>

</html>