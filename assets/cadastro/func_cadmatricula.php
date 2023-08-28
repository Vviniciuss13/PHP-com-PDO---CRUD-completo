<?php

require_once 'lib/conn.php';

extract($_POST);

$sqlEscola = "SELECT * FROM escola WHERE id_escola = :id_escola";
$selEscola = $conn->prepare($sqlEscola);
$selEscola->bindValue(":id_escola",$id_escola);
$selEscola->execute();
$escolaMatricula = $selEscola->fetch(PDO::FETCH_OBJ);

$data_matricula = date('Y-m-d',strtotime($data_matricula));

$sqlMatricula = "INSERT INTO matricula VALUES(:id_aluno,:id_escola,0,:data)";
$matricula = $conn->prepare($sqlMatricula);
$matricula->bindValue(":id_escola",$id_escola);
$matricula->bindValue(":id_aluno",$id_aluno);
$matricula->bindValue(":data",$data_matricula);
$matricula->execute();

$sqlAlunoMatriculado = "UPDATE aluno SET matriculado = 1 WHERE id_aluno = :id_aluno";
$matAluno = $conn->prepare($sqlAlunoMatriculado);
$matAluno->bindValue(":id_aluno",$id_aluno);
$matAluno->execute();
?>
<script>alert("Aluno Matriculado com sucesso")</script>
<meta http-equiv="refresh" content="0; url=<?= url("")?>">