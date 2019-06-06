<html>
<?php
    include('config/init.php');
    echoHeader();

    if(isset($_REQUEST['newItem'])){
        insertItem($_REQUEST['name'], $_REQUEST['quantity']
);
    }
?>
        </div>
            
        <div class= 'childB'>
            <h2>My List<h2>
            <?php
                $groceryTable = getAllItems();
                
                foreach($groceryTable as $tableItem){
                    echo ''.$tableItem['quantity'].' '.$tableItem['name']."<br />"; 
                }
            ?>
        </div>
    </div>
    


    </body>
</html>