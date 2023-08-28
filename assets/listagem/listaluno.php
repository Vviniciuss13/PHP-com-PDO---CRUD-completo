<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Escola</title>
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
				<a href="<?= url("cadastrar")?>" class="nav-item nav-link">Cadastro</a>
				<a href="<?= url("listar")?>" class="nav-item nav-link">Listagem</a>
			</div>
		</div>
	</nav>

    <div class="container">
        <table class="table table-white">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Série/Ano</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Matriculado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once 'lib/conn.php';

                $sql = "SELECT * FROM aluno";
                $stmt = $conn->query($sql);
                $alunos = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($alunos as $aluno){
            ?>
                <tr>
                    <td><?= $aluno->nome_aluno ?></td>
                    <td><?= $aluno->email_aluno ?></td>
                    <td><?= $aluno->ano ?>°</td>
                    <td>
                        <a 
                            href="https://api.whatsapp.com/send?phone=55<?= $aluno->ddd_aluno.$aluno->celular ?>" 
                            class="btn btn-outline-success"
                            target="_blank"
                        >
                            <i class="fab fa-whatsapp"></i> <?= "($aluno->ddd_aluno) $aluno->celular" ?>
                        </a>
                    </td>
                    <td>
                        <?php
                        if($aluno->matriculado == 0){
                            ?>
                            <a href="" class="btn btn-outline-danger"><i class="far fa-thumbs-down"></i></a>
                            <?php
                        }else{
                            ?>
                            <a href="" class="btn btn-outline-success"><i class="far fa-thumbs-up"></i></a>
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="<?= url("editar/aluno/$aluno->id_aluno")?>" class="btn btn-outline-warning">
                            <i class="far fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="<?= url("excluir/aluno/$aluno->id_aluno")?>" class="btn btn-outline-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        
    </div>
</body>

</html>