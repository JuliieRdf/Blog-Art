<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';



$pseudoMemb = $_POST['pseudoMemb'];

$passMemb = $_POST['passMemb'];



$passCheck = sql_select('MEMBRE','*',"passMemb='$passMemb'");

$pseudoCheck = sql_select('MEMBRE','*',"pseudoMemb='$pseudoMemb'");


if ($passCheck == $pseudoCheck){  
    $_SESSION["pseudo"] = $pseudoMemb;
    header('Location: ../../views/frontend/compte.php');
} else {
    header('Location: ../../views/backend/security/login.php');
}