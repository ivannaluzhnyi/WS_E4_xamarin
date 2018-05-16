<?php
include 'db.php';

$sql = $bdd->prepare('SELECT posseder.PRA_NUM, posseder.SPE_CODE, SPE_LIBELLE, POS_DIPLOME,POS_COEFPRESCRIPTION FROM posseder, specialite, praticien WHERE posseder.PRA_NUM = praticien.PRA_NUM AND posseder.SPE_CODE = specialite.SPE_CODE');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

