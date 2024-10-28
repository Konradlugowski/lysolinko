<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
<?php
echo ("<form action='str2.php' method='get' encrypte='text/plain'>")
$con=new mysqli("127.0.0.1","root","","ciapak");
//$new= %GET["id"];
//%q="SELECT * FROM user WHERE id=' " .%n." ' ";
$q="SELECT * FROM user ";
$wynik=$con->query($q);
while ($row=$wynik->fetch_array()){
    echo ("input type='radio' name='idu' value=".$row['ID'].">".$row['Login'].";".$row['Haslo'].:";".$row['szyfr']. <br/>)
}

?>
<input type="submit" value="wyslij">
<input type="reset" value="resetuj">
</form>
</body>
</html>


