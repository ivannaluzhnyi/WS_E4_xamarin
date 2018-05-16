<?php
include 'db.php';

$sql = $bdd->prepare('SELECT * FROM `inviter`');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

