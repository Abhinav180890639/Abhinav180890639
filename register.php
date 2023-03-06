<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User type</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <?php
        include("header-menu.php")
    ?>

<form action="register.php" method="post">
<h1 style="margin: auto; width: max-content;">CHOOSE YOUR ROLE</h1>
<div id="usertypediv" style="width: 30% ; font-size: 20px;">
     
     Select your role:
      <select name="role">
          <option value="voter">Voter</option>
          <option value="group">Group</option>
      </select><br>  
      
      <button id="usertypebtn">proceed</button>

     </div><br>
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $type = $_POST["role"];

if ($type == 'voter') {
    header("location: regvoter.php");
}

if ($type=='group') {
    header("location: regparty.php");
}

}

?>
 
</body>

<style>

#usertypebtn{
    width:90px;
    height: 35px;
    font-size: 15px;
    color: white;
    border-radius: 10px;
   background: rgb(24, 170, 203);
}

</style>
</html>