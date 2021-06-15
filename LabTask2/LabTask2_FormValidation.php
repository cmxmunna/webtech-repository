<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
    .error {color: #FF0000;}
    .font {font-family: 'Courier New', Courier, monospace; color: white;}
    .area {width: 20%;}
    .blood-cell {width: 50%;}
    body {background-color: #0E1113;}
    </style>
</head>
<body class="font">
    <?php
    $nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodErr ="";
    $name = $email = $dob = $gender = $degree =  $blood = $degree[0] = $degree[1] = $degree[2] = $degree[3] ="";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"])) {
            $nameErr = "You must have to filup the Name Box!";
        }
        if(str_word_count($_POST["name"]) >2) {
            $nameErr = "At least two words required!";
        }
        else{
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
                $nameErr = "Only letter and spcae alowed!";
                $name = "";
            }
        }

        if(empty($_POST["email"])) {
            $emailErr = "Email box cannot be empty!";
        }
        else{
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format!!";
                $email = "";
            }
        }

        if(empty($_POST["dob"])) {
            $dobErr = "Date of birth is required!";
        }
        else{
            $dob = $_POST["dob"];
            $dobErr = "";
        }

        if(empty($_POST["gender"])) {
            $genderErr = "Please select your gender!";
        }
        else{
            $gender = test_input($_POST["gender"]);
        }

        if(!empty($_POST["degree"])) {
            if(sizeof($_POST["degree"]) <2) {
            $degreeErr = "Please Select at least two degrees!";
            }
            else{
            $degreeErr = "";
            $degree = $_POST["degree"];
            }
        }
        else
        $degreeErr = "Please Select at least two degrees!";
        

        if(empty($_POST["blood"])) {
            $bloodErr = "Please select your blood group!";
        } 
        else{
            $bloodErr="";
            $blood = $_POST["blood"];
        }

    }   

        function test_input($data) 
        {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
    <h2>php Form Validation Example</h2>
    <form method="post" class="area" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
    </fieldset>
    <fieldset>
        <legend>EMAIL</legend>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
    </fieldset>
    <fieldset>
        <legend>DOB</legend>
        <input type="date" date_format="" id="dob" name="dob" min="1953-01-01" max="1998-12-31" value="<?php echo $dob; ?>">
        <span class="error">* <?php echo $dobErr; ?></span>
    </fieldset>
    <fieldset>
        <legend>GENDER</legend>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Male") echo "checked";?> value="Male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Female") echo "checked";?> value="Female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Other") echo "checked";?> value="Other">Other  
        <span class="error">* <?php echo $genderErr;?></span>
    </fieldset>
    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[0]"  <?php if(isset($_POST['degree'][0])) echo "checked"; ?> value="SSC">SSC 
        <input type="checkbox" name="degree[1]"  <?php if(isset($_POST['degree'][1])) echo "checked"; ?> value="HSC">HSC 
        <input type="checkbox" name="degree[2]"  <?php if(isset($_POST['degree'][2])) echo "checked"; ?> value="BSc">BSc 
        <input type="checkbox" name="degree[3]"  <?php if(isset($_POST['degree'][3])) echo "checked"; ?> value="MSc">MSc
        <span class="error">* <?php echo $degreeErr;?></span>
    </fieldset>
    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select id="blood" name="blood" class="blood-cell">
            <option value=""></option>
            <option value="A+" <?php if($blood == 'A+'){ echo 'selected = "selected"'; } ?> >A+</option>
            <option value="A-" <?php if($blood == 'A-'){ echo 'selected = "selected"'; } ?> >A-</option>
            <option value="B+" <?php if($blood == 'B+'){ echo 'selected = "selected"'; } ?> >B+</option>
            <option value="B-" <?php if($blood == 'B-'){ echo 'selected = "selected"'; } ?> >B-</option>
            <option value="O+" <?php if($blood == 'O+'){ echo 'selected = "selected"'; } ?> >O+</option>
            <option value="O-" <?php if($blood == 'O-'){ echo 'selected = "selected"'; } ?> >O-</option>
            <option value="AB+" <?php if($blood == 'AB+'){ echo 'selected = "selected"'; } ?> >AB+</option>
            <option value="AB-" <?php if($blood == 'AB-'){ echo 'selected = "selected"'; } ?> >AB-</option>
        </select>
        <span class="error">* <?php echo $bloodErr;?></span>
    </fieldset>
    <br>
    <center><input type="submit" name="submit" value="Submit" style="font-size: 20px;"></center>
    </form>

    <?php 
    echo "<h3><u>Your Input</u></h3>";
    echo "<b>Name: </b>".$name;
    echo "<br>";
    echo "<b>Email: </b>".$email;
    echo "<br>";
    echo "<b>DOB: </b>".$dob;
    echo "<br>";
    echo "<b>Gender: </b>".$gender;
    echo "<br>";
    echo "<b>Degree: </b>";
    if(isset($_POST["degree"])) {
        foreach($_POST["degree"] as $value)
        {
            echo $value." ";
        }
    }
    echo "<br>";
    echo "<b>Blood Group: </b>".$blood;
    ?>

</body>
</html>