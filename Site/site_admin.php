<?php

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Ballot</title>
    </head>

    <body style='background-color: #003366'>

        <center><h1 style='color:white;font-family:verdana'>Admin Ballot - Empire Of Okanagan</h1></center>
        <hr>

        <center><h2 style='color:white;font-family:verdana'><form name="admin" form action="setResults_admin.php" onsubmit="return validateName()" method="post">

                Motion ID (Capitalised): <input type="text" name="case" maxlength="6" required/>
                <br>
                <br>
                First Name (No Caps): <input type="text" name="names" required/>
                <br>
                <br>
                Vote: <input type="radio" value="aye" name="votes" required/>Aye
                      <input type="radio" value="nay" name="votes" required/>Nay
                      <input type="radio" value="abs" name="votes" required/>Abs
                <br>
                <br>

                <input type="submit" value="submit"/> 

            </form></center></h2> 

            <script type="text/javascript">

            function validateName(){
                var x=document.forms["admin"]["names"].value;
                if (x=="cris" || x=="akhil" || x=="anvit" || x=="manya" || x=="spandan" || x=="yatharth"){
                    return true;
                }else{
                    alert("Invalid Member, Check Spelling and Make Sure Your Name is Entered in Lowercase ");
                    return false;
                }
            }

            </script>
    </body>
</html>


