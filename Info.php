<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Info </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h2>MU Bootcamp Php | Forms  in php </h2>
      <form method="post">
        <label>Name</label>
        <input type="text" name="txtName" placeholder="Enter Your Name"> <br><br>
        <label> YrAge </label>
        <input type="number" min=10 name="txtAge" placeholder="Enter Your Age"> <br><br>
        <label>Gender</label>
        <input type="radio" name="Gender" value="male"> Male
        <input type="radio" name="Gender" value="female"> Female <br><br>
        <button type="Submit" name="btnShow">Show Information</button> 
        <button type="reset">Reset</button>

        <?php
        $name = @$_POST['txtName'];
        $age = @$_POST['txtAge'];
        $gender = @$_POST['Gender'];

        if(isset($_POST["btnShow"])){
            echo "<hr> Your Name is: ".$name." <br> Your  Gender is: ".$gender." <br>  Your Age is: ".$age;
        }
        ?>
      </form>
    </body>
</html>