<?php

// #1: INSERT NEW
function insertItem($name, $quanity){
    dbQuery(
        'INSERT INTO myGroceryTable(name, quantity)
        VALUES(:name, :quantity)',
        [
        'name' => $_REQUEST['name'],
        'quantity' => $_REQUEST['quantity']
        ]
    );
}

//#2: GET one item
function getItem($itemId){
    $result = dbQuery('
        SELECT *
        FROM myGroceryTable
        WHERE itemId = :itemId',

        ['itemId' => $itemId]
    ) -> fetch();

    return $result;
}

//#3: GET all items
function getAllItems(){
    $result = dbQuery('
        SELECT*
        FROM myGroceryTable'
    ) -> fetchAll();

    return $result;
}

function echoHeader(){
    echo"
        <head>
            <link rel='stylesheet' type='text/css' href='style.css'>
            <title> Grocery List</title>
        </head>
    <body>
    
        <h1>Groceries</h1>
        <div class= 'parent1'>
            <div class= 'childA'>
                <h2> What I need </h2>
                <form action= '' method= 'post'>
                    Item: <input type='text' name='name'>
                    <br/>
                    Quantity: <select name='quantity'>
                        <option value='default'>- 0 -</option>
                        <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option>
                        <option value='4'>4</option> <option value='5'>5</option>
                        <option value='6'>6</option> <option value='7'>7</option>
                        <option value='8'>8</option> <option value= '9'>9</option>
                    </select>
                    <br/>
                    <br/><br/>
                    <input type='submit' name='newItem' value='Add to list' />
                </form>
            </div>
            
            <div class= 'childB'>
                <h2>My List<h2>
            </div>
        </div>
    </body>
                
    ";
}




?>