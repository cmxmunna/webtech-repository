<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodErr ="";
    $name = $email = $dob = $gender = $degeree = $blood ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if( empty($_POST["name"])){
            $nameErr = "You must have to filup the Name Box";
        }
        if(str_word_count($_POST["name"]) <2){
            $nameErr = "Minimum 2 Wards required";
        }
        else{
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)){
                $nameErr = "Only letter and spcae alowed";
                $name = "";
            }
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>php Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" id="name" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span> <br><br>

    <input type="submit" name="submit" value="submit">
    </form>

    <?php 
    echo "<h3>Your Input</h3>";
    echo "<b>Name: </b>".$name;
    ?>

</body>
</html>