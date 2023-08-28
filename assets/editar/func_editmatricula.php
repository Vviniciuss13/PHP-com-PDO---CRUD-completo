<?php

require_once 'lib/conn.php';

extract($_POST);

$sql = "UPDATE matricula SET id_aluno = :id_aluno, id_escola = :id_escola, data = :data WHERE id_matricula = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id",$id);
$stmt->bindValue(":id_aluno",$id_aluno);
$stmt->bindValue(":id_escola",$id_escola);
$stmt->bindValue(":data",$data_matricula);
$stmt->execute();

$sqlUpdate = "UPDATE aluno SET matriculado = 1 WHERE id_aluno = :id_aluno";
$stmt = $conn->prepare($sqlUpdate);
$stmt->bindValue(":id_aluno", $id_aluno);
$stmt->execute();
?>
<script>alert("Matricula Alterada com sucesso");</script>
<meta http-equiv="refresh" content="0; url=<?= url("listar/matricula")?>">