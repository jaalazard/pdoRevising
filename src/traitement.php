<?php
require_once '../_connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors['firstname'] = 'Firstname is required';
    }
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') {
        $errors['lastname'] = 'Lastname is required';
    }
    if (empty($errors)) {
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);

        $query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $statement->execute();
        header('Location: success.php');
    }
    include 'form.php';
}
