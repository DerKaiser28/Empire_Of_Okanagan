<!DOCTYPE html>

<html>
    <head>
            <title>Voted!</title>
    </head>
    <body style='background-color: #003366'>
        <center><h1 style='color:white;font-family:verdana'>Your Vote Is Counted</h1></center>
        <hr>
        <h2 style='color:white;font-family:verdana;text-align:center'>
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
            $sql = 'INSERT INTO '.$caseID.' (vote,name) VALUES ("'.$votes.'","'.$name.'")'; //Insert users vote and name into the table
            $db -> query($sql); // executes previous command
            unset($db);
        ?>
        </h2>
    </body>
</html> 