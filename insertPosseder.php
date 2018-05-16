<?php
    include 'db.php';
    $codeSP = $_REQUEST['codeSPE'];
    $codePRA = $_REQUEST['codePRA'];
    $coef = $_REQUEST['coef'];
    $diplome = $_REQUEST['diplome'];


    $sql = $bdd->prepare("INSERT INTO `posseder` (`PRA_NUM`, `SPE_CODE`, `POS_DIPLOME`, `POS_COEFPRESCRIPTION`) VALUES ('".$codePRA."', '".$codeSP."', '".$diplome."', '".$coef."');");
    $sql->execute();
