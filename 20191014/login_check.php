<!-- 아이디, 비밀번호 db에서 확인 -->
<?php

session_start();

$ID=$_POST['ID'];
$PASSWD=$_POST['PASSWD'];

$mysqli=mysqli_connect("localhost","root","hello_981128");

$check="SELECT * FROM members WHERE ID='$ID'";
$result=$mysqli->query($check);

if($result -> num_rows==1) { //결과로 넘어온 행의 개수가 하나 
    $row=$result->fetch_array(MYSQLI_ASSOC); //하나의 열 $row 배열로 가져옴
    if($row['PASSWD']==$PASSWD) {
        $_SESSION['ID']=$ID; //로그인 성공시 세션 변수 만듦
        if(isset($_SESSION['ID'])) { //isset : 값이 존재하는지 체크
            header('Location: ./board.html');
        } else {
            echo "세션 저장 실패";
        }
    } else {
        echo "아이디 또는 비밀번호 확인";
    }
}
else {
    echo "아이디 또는 비밀번호 확인";
}

$result -> free(); //쿼리 결과 메모리 해제


?>