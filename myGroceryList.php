
<?php
    include('config/init.php');
    echoHeader();

    if(isset($_REQUEST['newItem'])){
        insertItem($_REQUEST['name'], $_REQUEST['quantity']
        );
    }

    $groceryTable = getAllItems();
                
    foreach($groceryTable as $tableItem){
        echo ''.$tableItem['quantity'].' '.$tableItem['name']."<br />"; 
    }
?>
