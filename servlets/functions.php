<?php

function getConnection(){
    return  pg_connect("host=54.93.65.5 port=5432 dbname=4_Olimpia user=fasttrackit_dev password=fasttrackit_dev");
    //connect to a database table

}

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