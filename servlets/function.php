<?php
function getContacts($conn){
    $result = pg_query($conn, "select * from agenda");
    $records = array();

    while($row = pg_fetch_array($result)){
        $person = array(
            "id"=>$row["id"],
            "firstName" => $row["nume"],
            "lastName" => $row["prenume"],
            "telefon" => $row["telefon"]
        );
        $records[] = $person;
    }
    return $records;
}
?>