<!-- php puts five where in thml file
 1. top of thml file
 2. entire header file
 3. entire body file
 4. end of thml file
 5. external file to link 
  -->
 <?php 
 echo "top of thml file";
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bootcamp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php 
 echo "entire header file";
 ?>
    </head>
    <body>
    <h2>MU Bootcamp Php | Html and Php in php </h2>
    <?php 
 echo "entire body file";
 ?>
    </body>
</html>
<?php 
 echo "end of thml file";
 ?>