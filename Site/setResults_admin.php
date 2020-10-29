<!DOCTYPE html>

<html>
    <head>
            <title>Voted!</title>
    </head>
    <body style='background-color: #003366'>
        <center><h1 style='color:white;font-family:verdana'>Your Vote Is Counted</h1></center>
        <hr>
        <h4 style='color:white;font-family:verdana'>
        <?php
            $caseID=$_POST['case'];
            $name=$_POST['names'];
            $votes=$_POST['votes'];
            echo 'Your Voter ID: '.$name;
        ?>
            <br>
            <br>
        <?php
            echo 'You voted '.$votes.' on this motion';
        ?> 
            <br>
            <br>
        <?php
            echo 'Motion ID is: '.$caseID;
        ?>

        <?php 
            $db = new SQLite3('motion.db'); //DB name/Location
            $sql = 'CREATE TABLE '.$caseID.' (vote TEXT,name TEXT)'; //Create Table
            $db -> query($sql); //Execute SQL command to create table
            $sql = 'INSERT INTO '.$caseID.' (vote,name) VALUES ("'.$votes.'","'.$name.'")'; //Insert Administrators vote and name into the table
            $db -> query($sql); // Execute previous command
            $db = new SQLite3('motion.db');
            unset($db);
        ?>

    </h4>
    </body>
</html> 