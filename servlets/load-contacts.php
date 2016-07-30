<?php include ("function.php");
$conn = pg_connect("host=54.93.65.5 port=5432 dbname=4_Olimpia user=fasttrackit_dev password=fasttrackit_dev");

$records = getContacts($conn);

pg_close($conn);

echo json_encode($records);
?>