<!-- ���̵�, ��й�ȣ db���� Ȯ�� -->
<?php

session_start();

$ID=$_POST['ID'];
$PASSWD=$_POST['PASSWD'];

$mysqli=mysqli_connect("localhost","root","hello_981128");

$check="SELECT * FROM members WHERE ID='$ID'";
$result=$mysqli->query($check);

if($result -> num_rows==1) { //����� �Ѿ�� ���� ������ �ϳ� 
    $row=$result->fetch_array(MYSQLI_ASSOC); //�ϳ��� �� $row �迭�� ������
    if($row['PASSWD']==$PASSWD) {
        $_SESSION['ID']=$ID; //�α��� ������ ���� ���� ����
        if(isset($_SESSION['ID'])) { //isset : ���� �����ϴ��� üũ
            header('Location: ./board.html');
        } else {
            echo "���� ���� ����";
        }
    } else {
        echo "���̵� �Ǵ� ��й�ȣ Ȯ��";
    }
}
else {
    echo "���̵� �Ǵ� ��й�ȣ Ȯ��";
}

$result -> free(); //���� ��� �޸� ����


?>