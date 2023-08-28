<?php

require_once 'lib/conn.php';

extract($_POST);

$arrayCelular = explode(" ", $celular);
$ddd = $arrayCelular[0];
$celular = $arrayCelular[1];

$sql = "UPDATE aluno SET nome_aluno = :nome, email_aluno = :email, ano = :ano, celular = :celular, ddd_aluno = :ddd, matriculado = matriculado WHERE id_aluno = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id",$id);
$stmt->bindValue(":nome",$nome);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":ano",$ano);
$stmt->bindValue(":celular",$celular);
$stmt->bindValue(":ddd",$ddd);
$stmt->execute();

?>
<script>alert('Aluno Editado com Sucesso')</script>
<meta http-equiv="refresh" content="0; url=<?= url("listar/aluno")?>">