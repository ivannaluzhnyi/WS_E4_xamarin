<?php
    include 'db.php';
    $codeSP = $_REQUEST['codeSPE'];
    $liballeSP = $_REQUEST['libelleSPE'];
    
    $sql = $bdd->prepare("INSERT INTO `specialite` (`SPE_CODE`, `SPE_LIBELLE`) VALUES ('".$codeSP."', '".$liballeSP."');");
    $sql->execute();