<?php
$conn = pg_connect("host=54.93.65.5 port=5432 dbname=4_Olimpia user=fasttrackit_dev password=fasttrackit_dev");

$id = $_POST["id"];
//$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]','$_POST[price]','$_POST[dop]')";
$resultSave = pg_query($conn, "insert into agenda where id='$id'");

$result = pg_query($conn, "select * from agenda");
while($row = pg_fetch_array($result)){
    $person = array(
        "id"=>$row["id"],
        "firstName" => $row["nume"],
        "lastName" => $row["prenume"],
        "telefon" => $row["telefon"]
    );
    $records[] = $person;
}

pg_close($conn);

echo json_encode($records);
?>