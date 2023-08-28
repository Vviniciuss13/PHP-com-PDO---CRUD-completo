<?php

require_once 'lib/conn.php';

extract($_POST);

$arrayTelefone = explode(" ",$telefone);
$ddd = $arrayTelefone[0];
$telefone = $arrayTelefone[1];

$sql = "UPDATE escola SET nome = :nome, email = :email, site = :site, telefone = :telefone, ddd = :ddd WHERE id_escola = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":nome",$nome);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":site",$site);
$stmt->bindValue(":telefone",$telefone);
$stmt->bindValue(":ddd",$ddd);
$stmt->bindValue(":id",$id);
$stmt->execute();
?>
<script>alert("Escola Atualizada com sucesso")</script>
<meta http-equiv="refresh" content="0; url=<?= url("listar/escola")?>">
