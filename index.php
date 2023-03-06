<html>

<head>
    <title>Online voting system - Home</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php
    include("header-menu.php");
?>



        <div id="main-content-div">

           
            <div id="loginSection">


                <form id="loginform" action="login.php" method="POST">
                <span id="login_here">LOGIN </span>

                    <br> <input id="tb" type="text" name="vid" placeholder="Enter voter id" required><br>
                      <br><input id="tb" type="password" name="pass" placeholder="Enter password" required><br> 
                    SELECT ROLE : <br>
                    <select id="tb" name="role" style="width: 25%; border: 2px solid black">
                    <option value="voter">Voter</option>
                    <option value="group">Group</option>
                </select><br>

                    <br>

                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br> New user? <a href="register.php">Register here</a>
                </form>
            </div>


        </div>
<div id="footer">
   <span id="footerspan">designed by- Abhinav Dyan Samantara</span> 
</div>





</body>

</html>