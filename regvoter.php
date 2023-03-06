 <html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        
            <?php
            include("header-menu.php")
            ?>
<br>
            
                <form class="regform" action="regvoter.php" method="POST" enctype="multipart/form-data">
                    
                    <h1>Registration for voter</h1>
                    NAME : <input id="tb" type="text" name="name" placeholder="enter Name" required><br>
                    VOTER ID : <input id="tb" type="text" name="vid" placeholder="enter voter id" required><br>
                    PASSWORD : <input id="tb" type="password" name="pass" placeholder="Password" required><br>
                    CONFIRM PASSWORD : <input id="tb" type="password" name="cpass" placeholder="Confirm Password" required><br>
                    ADDRESS : <input id="tb" style="width: 31%" type="text" name="add" placeholder="Address" required><br>
                 
                    UPLOAD VOTER CARD PHOTO : <input id="tb" type="file" id="profile" name="image" ><br><br>
                    
                    
                    <button id="registerbtn" type="submit" name="registerbtn">Register</button><br>
                    <div style="margin :0 30%">Already user? <a href="index.php">Login here</a></div> 
                </form>
            
    </body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include("connection.php");

        $name = $_POST['name'];
        $vid = $_POST['vid'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $add = $_POST['add'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $role = "voter";

    
        // check wether this user name exists or not

        $existsql = "select * from `users` where vid = '$vid'";
        $result = mysqli_query($con, $existsql);
        $numrow = mysqli_num_rows($result);


        if ($numrow>0) {
            $showerror = "vid already exists";

        }
        else{
            if($pass==$cpass){
                

                move_uploaded_file($tmp_name,"uploads/$image");
                $insert = mysqli_query($con, "insert into users (`name`, `vid`, `password`, `address`, `photo`, `status`, `votes`, `role`) values('$name', '$vid', '$pass', '$add', '$image', 0, 0, '$role') ");
                if($insert){
                    header("location: /v3/regvoter.php?registrationsuccess=true");
                    exit();
                }
            }
            else{
                $showerror = "passwords do not match";
            }
        }
        header("location: /v3/regvoter.php?registrationsuccess=fasle&error=$showerror");
    }
?>
