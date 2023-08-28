<?php
require_once 'lib/conn.php';

$prepare = explode("/", $_GET['route']);
$id = $prepare[3];
$sql = "SELECT * FROM aluno WHERE id_aluno = :id_aluno";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id_aluno",$id);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
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
        <form action="<?= url("editar/aluno/func_editaluno")?>" method="POST">
            <input type="hidden" name="id" value="<?= $aluno->id_aluno ?>">
            <div class="row mb-3 w-90">
                <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $aluno->nome_aluno ?>" name="nome" id="nome" class="form-control" placeholder="Nome">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-lg-2 col-form-label">E-mail:</label>
                <div class="col-sm-10">
                    <input type="email" value="<?= $aluno->email_aluno ?>" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>
            </div>

            <div class="row mb-3">
                <label for="ano" class="col-sm-2 col-form-label">Série/Ano: </label>
                <div class="col-lg-10">
                    <input type="number" value="<?= $aluno->ano ?>" name="ano" id="ano" min=0 max=9 class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="celular" class="col-sm-2 col-form-label">Celular: </label>
                <div class="col-lg-10">
                    <input type="tel" value="<?= $aluno->ddd_aluno.' '.$aluno->celular ?>" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" name="celular" id="celular" class="form-control" placeholder="Formato: 15 9999-9999">
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-outline-danger rounded-pill">Editar Aluno</button>
            <button reset="submit" class="btn btn-outline-dark rounded-pill">Limpar</button>
        </form>
    </div>
</body>
</html>