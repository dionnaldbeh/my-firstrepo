<?php
include('conn.php');

for($x=0; $x<10; $x++){
    $_FILES = file_get_contents('http://loripsum.net/api/3',true);
    $uTime = date('Y-m-d');
    $query = "INSERT INTO [Conn].[dbo].[bposts] ([content],[date]) VALUES ('$_FILES', '$uTime')";
    $_REQUEST = sqlsrv_query($link, $query);
}
?>
