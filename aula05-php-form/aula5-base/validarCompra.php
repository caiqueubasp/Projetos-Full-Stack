<?php

$nome = $_POST['nomeCliente'];
$cpf = $_POST['cpf'];
$validade = $_POST['validade'];
$nCartao = $_POST['nCartao'];
$cvv = $_POST['cvv'];
$nomeCurso = $_POST['nomeCurso'];
$preco = $_POST['preco']

// $erros = [];

function validarNome($nome){
    return strlen($nome) > 0;
}

function validarCPF($cpf){
    return strlen($cpf) == 11;
}

function validarNCartao($nCartao){
    return strlen($nCartao) ==16;
    }

function validarData($data){
    $dataatual = data('Y-m');
    return  $data >= $dataatual;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
 <!-- Aqui é o que deve aparecer quando houver dados incorretos -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span>Preencha seus dados corretamente!</span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                           
                                <li class="list-group-item">
                        <!-- aqui mostra o que deve ser arrumado -->
                                </li>
                          
                        </ul>
                        <div class="center">
                            <a href="index.php">Voltar para home</a>
                        </div>
                    </div>
                </div>
<!-- Aqui termina a visualização de erros -->
<!-- Aqui é o que deve aparecer quando todos os dados estiverem corretos -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span>Compra realizada com sucesso!</span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nome Curso: </strong> NOME CURSO </li>
                            <li class="list-group-item"><strong>Preço: R$ </strong> PREÇO CURSO </li>
                            <li class="list-group-item"><strong>Nome Completo: </strong> NOME COMPLETO</li>
                        </ul>
                        <div class="center">
                            <a href="index.php">Voltar para home</a>
                        </div>
                    </div>
                </div>
<!-- Aqui termina a visualização p/ quem preencheu certo -->
        </div>
    </div>
</body>
</html>
