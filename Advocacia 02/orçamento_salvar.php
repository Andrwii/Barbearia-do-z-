<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>orçamento</title>

        <!-- REFERÊNCIAS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="images/demo/balanca png.png" />
        <script src="Mascara.js"></script>


        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>

        <!-- INCLUSÃO DO CABEÇALHO DA PÁGINA -->
        <?php
        include 'cabecalho.php';
        include 'conexao_bd.php';

        //cpf, nome, email, telefone, turno, varaProcessual, descricao
        $cpf = $_POST["txtCpf"];
        $nome = $_POST["txtNome"];
        $email = $_POST["txtEmail"];
        $telefone = $_POST["txtTelefone"];
        $turno = $_POST["txtTurno"];
        $vara = $_POST["txtVara"];
        $descricao = $_POST["txtDescricao"];

        $sql = "INSERT INTO orçamento (cpf, nome, email, telefone, turno, varaProcessual, descricao)
        VALUES ('$cpf', '$nome','$email','$telefone', '$turno', '$vara', '$descricao')";
        
        if (executarComando($sql) == true)
        {
        echo '<h1>Conta Criada</h1>';
        }
        else {
            echo '<h1>Erro</h1>';
        }

        ?>

    
</body>
</html>