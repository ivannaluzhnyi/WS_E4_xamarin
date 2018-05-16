<?php
include 'db.php';

$sql = $bdd->prepare('SELECT inviter.PRA_NUM, PRA_NOM, PRA_PRENOM FROM inviter, praticien WHERE praticien.PRA_NUM = inviter.PRA_NUM');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);


