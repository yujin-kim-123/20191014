<?php

session_start();
$res=session_destory(); //세션 변수 지우기
if($res) {
    header('Location: ./index.html');
}
?>