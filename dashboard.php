<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: index.php");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>

<html>
<head>
    <title>Online voting system - Dashboard</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <?php
        include("header-menu.php")
    ?>


    <div id="mainSection">


        <div id="profileSection">
            <center><img src="uploads/<?php echo $data['photo']?>"  id="profilephoto"></center><br>
            <b>NAME : </b><?php echo $data['name'] ?><br>
            <b>VOTER ID : </b><?php echo $data['vid'] ?><br>
            <b>ADDRESS : </b><?php echo $data['address'] ?><br>
            <b>STATUS : </b><?php echo $status ?><br>

            <a  href="pdf.php?rowid=<?php echo $data['id'] ?>"><button id="downloadbtn">DOWNLOAD PDF</button></a>
        </div>


        <div id="groupSection">
            <?php
                if(isset($_SESSION['groups'])){
                    $groups = $_SESSION['groups'];
                    for($i=0; $i<count($groups); $i++){
                        echo '<div id="groupdiv">
                        <img src="uploads/'.$groups[$i]['photo'].'" style="width:100px; height:100px;border:2px solid black;float: right; margin:10px 10px 0 0 ;">
                        <b>Party Name : </b>'.$groups[$i]['partyname'].'<br><br>
                        <b>candidate Name : </b>'.$groups[$i]['name'].'<br><br>
                        <b>Votes :</b>'.$groups[$i]['votes'].'<br><br>
                        <form method="POST" action="vote.php">
                        <input type="hidden" name="gvotes" value="'.$groups[$i]['votes'] .'">
                        
                        <input type="hidden" name="gid" value="'.$groups[$i]['id'] .'">';

                        if($_SESSION['status']==1){  
                            echo '<button disabled
                            style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;"
                            type="button">Voted</button>';
                        }else{
                            echo '<button
                            style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;"
                            type="submit">Vote</button>';
                        }
                        echo ' </form>
                        </div>';
                    }
                }else{
                    echo '  <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                    <b>No groups available right now.</b>
                    </div>';
                }  
            ?>
        </div>
    </div>
</body>

</html>
