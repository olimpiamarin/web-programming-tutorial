<?php include ("header-tpl.php") ?>

<?php
//Save contact if necesary
if (isset($_POST["firstName"])){
    include ("servlets/add-contacts.php");
    echo "<p>Contact succesfuly added!</p>";
}
?>

<div id="breadcrumb">HOME : welcome home</div>

<h1>Agenda</h1>


<form action="agenda.php" method="post">
    <input type="text" name="firstName" placeholder="Nume">
    <input type="text" name="lastName" placeholder="Prenume">
    <input type="text" name="phone" placeholder="Telefon">
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