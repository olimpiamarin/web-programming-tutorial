<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "<p>Hello World!</p>";

$suma = 3 + 5;
echo $suma;
echo "</br>";

$nume = 'Pia';
$message = "salut $nume, bine ai venit!";

echo $message;
?>

<h2>PHP functions</h2>

<?php
$n = 10;
function addNum($a, $b = 0, $c = 0)
{
    global $n;
    $s = $a + $b + $c;
    return $s * $n; //variabila locala
}

echo addNum(3, 8);

$a = "</br>$n!"; //variabila globala
echo $a;

?>

<h2>Array</h2>
<?php
$agenda = array("Matei", "Andrei", "Ionel");

function getAgendaSize($agenda) {
    sleep(1);
    return count($agenda);
}

$n = getAgendaSize($agenda);

for ($i = 0; $i < count($agenda); $i++) {
    echo "<li>$agenda[$i]</li>";
}
?>

<h2>Constants</h2>

<?php
define ("NUME", "Matei");
echo "Numele: " .NUME;
?>


</body>
</html>