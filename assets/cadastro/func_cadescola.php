<?php

require_once 'lib/conn.php';

extract($_POST);

$arrayTelefone = explode(" ", $telefone);
$ddd = $arrayTelefone[0];
$telefone = $arrayTelefone[1];

$sql = "INSERT INTO escola VALUES(0,:nome,:email,:site,:telefone,:ddd)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":nome",$nome);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":site",$site);
$stmt->bindValue(":telefone",$telefone);
$stmt->bindValue(":ddd",$ddd);
$stmt->execute();

?>
<script>alert('Escola Cadastrada com Sucesso')</script>
<meta http-equiv="refresh" content="0;url=<?= url("")?>">