<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <?php
        include("header-menu.php");


        echo '<form id="contactform" action="" method="">

           <h1>Contact Us</h1> 
           <br>
        
            email: <br>
            <input name="email" class="contacttb" type="text"><br>
            question:<br>
            <input name="question" class="contacttb" type="text"><br>
            comment:<br>
            <textarea name="comment" id="commentarea" cols="30" rows="5"></textarea><br>

            <button id="contactsubmitbtn">submit</button>

        
        
        </form>';



        
    ?>
</body>



</html>