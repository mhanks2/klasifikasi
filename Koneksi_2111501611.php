<?php
// 2111501611 Arif Firmansyah\\

$host = "localhost";
$user = "root"; // adjust according to your mysql setting
$pass = ""; //adjustv according to your mysql setting
$dbName = "db_pemketir_2111501611";
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("" . mysqli_connect_error()) ;
}
echo "";

$sql = mysqli_select_db($conn, $dbName);
if (!$sql) {
    die ("" .mysqli_error($conn));
}
echo ("");
?>