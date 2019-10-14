<!-- dbÀÌ¸§:contexts  -->

<?php

$TITLE=$_POST['TITLE'];
$CONTEXTS=$_POST['CONTEXTS'];

$mysqli=mysqli_connect("","root","hello_981128");

mysqli_query($mysqli, "INSERT INTO VALUES('$TITLE','$CONTEXTS')");


?>