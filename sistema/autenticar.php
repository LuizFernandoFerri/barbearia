<?php
require_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->query("SELECT * from usuarios where nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);


?>