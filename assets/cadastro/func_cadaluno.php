<?php

require_once 'lib/conn.php';

extract($_POST);

$arrayCelular = explode(" ", $celular);
$ddd_aluno = $arrayCelular[0];
$celular = $arrayCelular[1];

$sql = 'INSERT INTO aluno VALUE(0,:nome,:email,:ano,:celular,:ddd, 0)';
$stmt = $conn->prepare($sql);
$stmt->bindValue(":nome",$nome_aluno);
$stmt->bindValue(":email",$email_aluno);
$stmt->bindValue(":ano",$ano);
$stmt->bindValue(":celular",$celular);
$stmt->bindValue(":ddd",$ddd_aluno);
$stmt->execute();
?>
<script>alert('Aluno Cadastrado com Sucesso')</script>
<meta http-equiv="refresh" content="0;url=<?= url("")?>">
