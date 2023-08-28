<?php

require_once 'lib/conn.php';

$prepare = explode("/",$_GET['route']);
$id = $prepare[3];

$sql = "DELETE FROM escola WHERE id_escola = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id",$id);
$stmt->execute();
$escola = $stmt->fetch(PDO::FETCH_OBJ);

?>
<script>alert("Escola excluida com sucesso")</script>
<meta http-equiv="refresh" content="0;url=<?= url("listar/escola")?>">