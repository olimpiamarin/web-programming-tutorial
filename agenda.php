<?php include ("header-tpl.php") ?>

<?php
//Save contact if necesary
if (isset($_POST["Nume"])){

    $fileName = "js/mocks/load-contacts.json";
    $allContactsStr = file_get_contents($fileName);
    $allContacts = json_decode($allContactsStr);


    $lastContact = $allContacts[count($allContacts) - 1];
    $newPerson = array(
        "id"=>$lastContact->id + 1,
        "firstName" => $_POST["Nume"],
        "lastName" => $_POST["Prenume"],
        "telefon" => $_POST["Telefon"]
    );

    $allContacts[] = $newPerson; // add new item in all contacts array
    file_put_contents($fileName, json_encode($allContacts, JSON_PRETTY_PRINT));

    echo "<p>Contact succesfuly added!</p>";

}
?>

<div id="breadcrumb">HOME : welcome home</div>

<h1>Agenda</h1>


<form action="agenda.php" method="post">
    <input type="text" name="Nume" placeholder="Nume">
    <input type="text" name="Prenume" placeholder="Prenume">
    <input type="text" name="Telefon" placeholder="Telefon">
    <button>Add</button>
</form>
<br>
<table id="agenda">
    <thead>
    <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Telefon</th>
        <th width="50"></th>
    </tr>
    </thead>
    <tbody>
    </tbody>

</table>


<?php include ("footer-tpl.php") ?>