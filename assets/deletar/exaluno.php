<?php
require_once 'lib/conn.php';

$prepare = explode("/",$_GET['route']);
$id = $prepare[3];

$sql = "DELETE FROM aluno WHERE id_aluno = :id_aluno";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id_aluno",$id);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_OBJ);
?>
<script>alert('Cadastro Deletado com Sucesso')</script>
<meta http-equiv="refresh" content="0;url=<?=url("listar/aluno")?>">