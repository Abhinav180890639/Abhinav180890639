<?php
    
    
    include("connection.php");

    $vid = $_POST['vid'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    $check = mysqli_query($con, "select * from users where vid='$vid' and password='$pass' and role='$role' ");

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($con, "select name, photo, votes, partyname, id from users where role='group' ");
        session_start();
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            
            $_SESSION['loggedin'] = true;
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['vid'] = $data['vid'];
        $_SESSION['data'] = $data;
        // echo '<script>
        //         window.location = "dashboard.php";
        //     </script>';
        
        header("location: dashboard.php");
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
            </script>';

            header("location: index.php?invalidcredentials");
    }
    
?>