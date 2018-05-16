<?php
include 'db.php';

$sql = $bdd->prepare('SELECT * FROM `specialite`');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

