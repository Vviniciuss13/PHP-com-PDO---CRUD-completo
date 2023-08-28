<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #c5192d">
		<a class="navbar-brand" href="#"><img src="assets/img/ods 4.png" width="50" alt="Ods"></a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
                <a href="<?= url("")?>" class="nav-item nav-link active" style="color: #FFFFFF;font-size: 18px;font-weight: bold">ODS 4</a>
				<a href="<?= url("cadastrar") ?>" class="nav-item nav-link">Cadastro</a>
				<a href="<?= url("listar") ?>" class="nav-item nav-link">Listagem</a>
			</div>
		</div>
	</nav>
    <div class="p-5 mt-5 bg-light rounded-3 container">
        <div class="page-header" style="color: #c5192d">
		    <h1>Cadastrar:</h1>
	    </div>
        <div class="container-fluid py-5 d-flex justify-content-evenly">
            <a href="<?= url("cadastrar/aluno")?>" class="btn btn-outline-danger btn-lg py-2 px-10 fs-3 rounded-circle">
            <i class="fas fa-user-graduate"></i> 
                <p>Aluno</p>
            </a>
            <a href="<?= url("cadastrar/escola")?>" class="btn btn-outline-danger btn-lg py-2 px-10 fs-3 rounded-circle">
                <i class="fas fa-school"></i>
                <p>Escola</p>
            </a>
            <a href="<?= url("cadastrar/matricula")?>" class="btn btn-outline-danger btn-lg py-2 px-10 fs-3 rounded-circle">
            <i class="fas fa-pencil-alt"></i>
                <p>Matricula</p>
            </a>
        </div>
    </div>
</body>
</html>