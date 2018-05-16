<?php
include 'db.php';

$sql = $bdd->prepare('SELECT PRA_NUM, PRA_NOM, PRA_PRENOM FROM `praticien`');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

