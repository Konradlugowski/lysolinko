!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action="str3.php">
<?php
$con=new mysqli("127.0.0.1","root","","ciapak");
$q="SELECT * FROM user WHERE id-' " .$n." ' ";
//$q="SELECT *FROM user ";

if($wyn=$con->query($q))
while($row=$wyn->fetch_array())
echo($row)[1].";" .$row[2]. "<br/>";
$q1="SELECT * FROM user WHERE id='" .$n."'";
$wyn1=$con->query($q1);
$row=$wyn1->fetch_array();

echo("<input type 'text' name='im' vlue)