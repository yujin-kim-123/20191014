<!-- ȸ������, db�̸�:members-->
<?php

$ID=$_POST['ID'];
$PASSWD=$_POST['PASSWD'];
$NAME=$_POST['NAME'];


$mysqli=mysqli_connect("127.0.0.0","root","hello_981128");


$result=$mysqli->query($check);



if($result->num_rows==1) {
    echo "�̹� �����ϴ� ID";
    exit();
}


$signup=mysqli_query($mysqli, "INSERT INTO members (ID, PASSWD, NAME) VALUES ('$ID', '$PASSWD', '$NAME')");

if($signup) {
    echo "sign up success";
    header('Location: ./index.html');
}


?>