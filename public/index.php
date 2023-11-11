<?php 
include '../src/form.php';
require_once '../_connec.php';

$pdo = new \PDO(DSN, USER, PASS);
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<p> Pour le moment, mes amis sont : </p>
<ul>

<?php
foreach ($friends as $friend) {
    echo "<li>" . $friend['firstname'] . " " . $friend['lastname'] . "</li>";
}
?>
</ul>
