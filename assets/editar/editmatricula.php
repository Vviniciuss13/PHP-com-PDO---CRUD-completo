<?php
require_once 'lib/conn.php';

$prepare = explode("/", $_GET['route']);

$id = $prepare[3];
$id_aluno = $prepare[4];
$id_escola = $prepare[5];

$sqlMatricula = "SELECT * FROM matricula WHERE id_matricula = :id_matricula";
$stmt = $conn->prepare($sqlMatricula);
$stmt->bindValue(":id_matricula",$id);
$stmt->execute();
$matricula = $stmt->fetch(PDO::FETCH_OBJ);

$sqlAluno = "SELECT * FROM aluno WHERE id_aluno = :id_aluno";
$stmt = $conn->prepare($sqlAluno);
$stmt->bindValue(":id_aluno",$id_aluno);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_OBJ);

$sqlAlunos = "SELECT * FROM aluno WHERE matriculado = 0";
$alunos = $conn->query($sqlAlunos);
$listaAlunos = $alunos->fetchAll(PDO::FETCH_OBJ);

$sqlUpdate = "UPDATE aluno SET matriculado = 0 WHERE id_aluno = :id_aluno";
$stmt = $conn->prepare($sqlUpdate);
$stmt->bindValue(":id_aluno",$id_aluno);
$stmt->execute();

$sqlEscola = "SELECT * FROM escola WHERE id_escola = :id_escola";
$stmt = $conn->prepare($sqlEscola);
$stmt->bindValue(":id_escola",$id_escola);
$stmt->execute();
$escola = $stmt->fetch(PDO::FETCH_OBJ);

$sqlEscolas = "SELECT * FROM escola";
$escolas = $conn->query($sqlEscolas);
$listaEscolas = $escolas->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #c5192d">
		<a class="navbar-brand" href="#"><img src="assets/img/ods 4.png" width="50" alt="Ods"></a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
                <a href="<?= url("")?>" class="nav-item nav-link active" style="color: #FFFFFF;font-size: 18px;font-weight: bold">ODS 4</a>
				<a href="<?= url("cadastrar")?>" class="nav-item nav-link">Cadastro</a>
				<a href="<?= url("listar")?>" class="nav-item nav-link">Listagem</a>
			</div>
		</div>
	</nav>
    <div class="container my-5 w-50">
        <form action="<?= url("editar/matricula/func_editmatricula")?>" method="POST">
            <input type="hidden" name="id" value="<?= $matricula->id_matricula ?>">
            <div class="row mb-3 w-90">                
                <label for="aluno" class="col-sm-1 col-form-label">Aluno:</label>
                <div class="col-sm-10">
                    <select name="id_aluno" id="aluno" class="form-control">
                        <option value="<?=$aluno->id_aluno?>"><?=$aluno->nome_aluno?></option>
                            <?php
                            foreach($listaAlunos as $aluno){
                            ?>
                            <option value="<?= $aluno->id_aluno ?>"><?= $aluno->nome_aluno ?>
                        </option>
                            <?php
                            }
                            ?>
                    </select>
                    </div>
            </div>

            <div class="row mb-3 w-90">
                <label for="escola" class="col-sm-1 col-form-label">Escola: </label>
                <div class="col-sm-10">
                    <select name="id_escola" id="escola" class="form-control">
                        <option value="<?= $escola->id_escola ?>"><?=$escola->nome?>
                            <?php
                            foreach($listaEscolas as $escola){
                            ?>
                            <option value="<?= $escola->id_escola ?>"><?= $escola->nome ?></option>
                            <?php
                            }
                        ?>
                        </option>
                    </select>
                    </div>
            </div>

            <div class="row mb-3 w-90" id="data">
                <label for="data_matricula" class="col-sm-1 col-form-label">Data da Matricula:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="data_matricula" id="data_matricula" min=<?= $matricula->data?> value="<?= $matricula->data ?>">   
                </div>
            </div>

            <button type="submit" class="btn btn-outline-danger rounded-pill">Matricular</button>
            <button reset="submit" class="btn btn-outline-dark rounded-pill">Limpar</button>
        </form>
    </div>
</body>
</html>