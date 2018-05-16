<?php
include 'db.php';

$sql = $bdd->prepare('SELECT praticien.PRA_NUM, praticien.PRA_NOM, praticien.PRA_PRENOM FROM posseder, praticien WHERE posseder.PRA_NUM = praticien.PRA_NUM');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

