<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$usuario', '".md5($senha)."')";

    $pdo = new PDO('mysql:host=localhost;dbname=formulario', 'root', '');
    $mysql = $pdo->prepare($sql);
    $mysql->execute();


