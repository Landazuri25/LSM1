<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="lsm";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("No hay coonexion:".mysqli_connect_error());
}
?>