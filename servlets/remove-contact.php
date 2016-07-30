<?php
include("functions.php");

$conn = getConnection();
$id = $_POST["id"];
$resultDel = pg_query($conn, "delete from agenda where id=" .$id);

$records = getContacts($conn);
pg_close($conn);

echo json_encode($records);
?>