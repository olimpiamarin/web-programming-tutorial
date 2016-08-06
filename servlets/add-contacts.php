<?php
include("functions.php");

$conn = getConnection();

$nume = $_POST["firstName"];
$prenume = $_POST["lastName"];
$telefon = $_POST["phone"];

$addResult = pg_query_params($conn, "insert into agenda (nume, prenume, telefon) VALUES ($1,$2, $3)", array($nume,$prenume,$telefon));

pg_close($conn);

?>