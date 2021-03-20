<?php
$_SERVER = 'DESKTOP-U3C2FFN\SQLEXPRESS';
$User = 'sa';
$Pass = 'Pws@';
$db = 'Conn';
//$connectionInfo = array("Database" => $db, "UID" => $User, "PWD" => $Pass);

// $link = sqlsrv_connect($_SERVER, $connectionInfo);

//DB Connection using PDO
$link = new pdo("sqlsrv:server=$_SERVER; database = $db", $User, $Pass);

if(!$link){
    die("Not Connecting to DB");
}
echo 'Connected successfully';
?>