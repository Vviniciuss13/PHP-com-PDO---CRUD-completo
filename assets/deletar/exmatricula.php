<?php
require_once 'lib/conn.php';

$prepare = explode("/",$_GET['route']);

$id_aluno = $prepare[4];
$sqlUpdate = "UPDATE aluno SET matriculado = 0 WHERE id_aluno = :id_aluno";
$stmt = $conn->prepare($sqlUpdate);
$stmt->bindValue(":id_aluno",$id_aluno);
$stmt->execute();

$id = $prepare[3];
$sql = "DELETE FROM matricula WHERE id_matricula = :id_matricula";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id_matricula",$id);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_OBJ);
?>
<script>alert('Cadastro Deletado com Sucesso')</script>
<meta http-equiv="refresh" content="0;url=<?= url("listar/matricula")?>">