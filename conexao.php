﻿<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '12345678');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

 ?>
