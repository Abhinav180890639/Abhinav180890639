<?php

require("fpdf/fpdf.php");

$pdf =new FPDF();
$pdf -> addpage();

$pdf ->setfont('arial','B',25);

// for logo in pdf page
$pdf -> cell(30, 30,$pdf -> image('img/logo.png', 10, 6, 30,30),0, 0, 'L');

$pdf -> cell(0, 10, ' SMART ELECTION',0,1, 'L');

$pdf ->setfont('arial','B',20);
$pdf -> cell(0, 10, '                 Online Voting',0,1, 'L');

$pdf -> cell(0, 10, '',0,1, 'L');

$pdf -> cell(0, 10, '',0,1, 'L');
$pdf -> cell(0, 10, '',0,1, 'L');


$pdf ->setfont('arial','',16);



include('connection.php');

$sql = " SELECT * FROM `users` WHERE `id` = ".$_GET['rowid'];

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){


$pdf -> cell(50, 10, 'SL ID : ',1,0, 'L');
$pdf -> cell(0, 10, $row['id'],1,1, 'L');

$pdf -> cell(0, 10, '',0,1, 'L');
$pdf -> cell(0, 10, '',0,1, 'L');

$pdf -> cell(50, 10, 'NAME : ',1,0, 'L');
$pdf -> cell(0, 10, $row['name'],1,1, 'L');

$pdf -> cell(50, 10, 'VOTER ID : ',1,0, 'L');
$pdf -> cell(0, 10, $row['vid'],1,1, 'L');

$pdf -> cell(50, 10, 'ADDRESS : ',1,0, 'L');
$pdf -> cell(0, 10, $row['address'],1,1, 'L');

$pdf -> cell(50, 10, 'STATUS : ',1,0, 'L');
$pdf -> cell(0, 10, $row['status'],1,1, 'L');


$pdf -> cell(0, 10, '',0,1, 'L');
$pdf -> cell(0, 10, '',0,1, 'L');


$pdf -> cell(50, 10, 'DATE & TIME : ',1,0, 'L');
$pdf -> cell(0, 10, $row['dt'],1,1, 'L');



}




$pdf -> cell(0, 10, '',0,1, 'L');
$pdf -> cell(0, 10, '',0,1, 'L');
$pdf -> cell(0, 10, '',0,1, 'L');


$pdf -> cell(0, 10, 'DECLARATION',0,1, 'L');

$pdf ->setfont('arial','',12);
$pdf -> multicell(0, 4, 'We are committed to protecting your privacy and security, this policy explains how and why we use your personal data to ensure you remain informed and in control of your information. Information about visitors to this website domain is automatically logged for the purposes of statistical analysis. Your voter id is not automatically logged without your knowledge.',1, 'J');


$pdf -> output();

?>