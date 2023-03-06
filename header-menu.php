<div id="headerSection">
    <div id="logodiv"><img id="logo" src="img/logo.png" alt=""></div>
    <div id="headertitle">SMART ELECTION <br>
        <h6>online voting system</h6>
    </div>


    <ul id="menubar">
        <li><a href="help.php">HELP</a> </li>
        <li><a href="about.php">ABOUT US</a> </li>
        <li><a href="contact.php">CONTACT US</a> </li>
    </ul>





    <?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<a href="logout.php"><button id="logout-button">Logout</button></a>';
}

?>

</div>
<link rel="stylesheet" href="css/headerstyle.css">