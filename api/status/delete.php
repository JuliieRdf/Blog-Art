<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$numStat = sql_escape($_POST['numStat']);

sql_delete('statut',"numStat = $numStat");

header('Location: ../../views/backend/status/list.php');
