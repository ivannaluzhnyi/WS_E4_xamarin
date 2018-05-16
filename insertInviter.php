<?php
    include 'db.php';
    $num = $_REQUEST['numACT'];
    $pra = $_REQUEST['codePRA'];
    $specialisteon = $_REQUEST['specialisteon'];

    $sql = $bdd->prepare("INSERT INTO `inviter` (`AC_NUM`, `PRA_NUM`, `SPECIALISTEON`) VALUES ('".$num."', '".$pra."', '".$specialisteon."');");
    $sql->execute();

