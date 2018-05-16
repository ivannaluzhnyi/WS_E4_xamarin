<?php
    include 'db.php';
    $codeSP = $_REQUEST['codeSPE'];
    $liballeSP = $_REQUEST['libelleSPE'];
    
    $sql = $bdd->prepare("UPDATE `specialite` SET `SPE_LIBELLE` = '".$liballeSP."' WHERE `specialite`.`SPE_CODE` = '".$codeSP."';");
    $sql->execute();