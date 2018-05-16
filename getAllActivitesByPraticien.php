<?php
include 'db.php';
$codePRA = $_REQUEST['codePraticien'];
$sql = $bdd->prepare('SELECT inviter.PRA_NUM, inviter.SPECIALISTEON, inviter.AC_NUM, activite_compl.AC_DATE, activite_compl.AC_LIEU, activite_compl.AC_THEME, activite_compl.AC_MOTIF FROM inviter, activite_compl WHERE inviter.AC_NUM = activite_compl.AC_NUM AND inviter.PRA_NUM ='.$codePRA.' ');
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);


