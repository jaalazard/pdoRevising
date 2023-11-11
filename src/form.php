<h1>Join my friend's database right now</h1>
<form action='../src/traitement.php' method='POST'>
    <label for="firstname">Firstname</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your firstname here" required>
    <label for="lastname">Lastname</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your lastname here" required>
    <input type="submit" value="Send">
</form>

<?php
include '../_connec.php';
$pdo = new \PDO(DSN, USER, PASS);
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}



