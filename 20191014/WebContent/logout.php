<?php

session_start();
$res=session_destory(); //���� ���� �����
if($res) {
    header('Location: ./index.html');
}
?>