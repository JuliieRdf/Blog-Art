<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$dtCreCom = sql_escape($_POST['dtCreCom']);
$libCom = sql_escape($_POST['libCom']);
$attModCom = sql_escape($_POST['attModCom']);
$dtModCom= sql_escape($_POST['dtModCom']);
$notifComKOAff = sql_escape($_POST['notifComKOAff']);
$delLogiq = sql_escape($_POST['delLogiq']);
sql_insert('MOTCLE','libMotCle',"'$libMotCle'");

header('Location: ../../views/backend/comment/list.php');