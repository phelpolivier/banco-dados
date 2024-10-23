<?php
    // CRIA O SERVIDOR
    $servidor="localhost";
    $usuario="root";
    $senha="root";
    $banco="ds1";

    // CONECTAR AO BANCO DE DADOS
    $conexao=mysqli_connect($servidor,$usuario,$senha,$banco);

    // RECEBE OS DADOS DO FORMULÁRIO
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];
    $email=$_POST['email'];
    $nascimento=$_POST['nascimento'];

    // FUNÇÃO PARA EXECUTAR
    $sql="insert into cliente(nome,telefone,endereco,email,nascimento) values('$nome','$telefone','$endereco','$email','$nascimento')";
    mysqli_query($conexao,$sql);
?>