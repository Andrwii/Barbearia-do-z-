<!DOCTYPE html>
<html lang="en">
<head>
<title>Criar conta</title>
        <meta charset="utf-8">

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
    <?php include 'cabecalho.php'
    ?>

    <form name="criarConta" action="orçamento_salvar.php" method="post">
    <div id="body">

                <h1><span>Orçamento</span></h1>
                <ol>
                    <label for="">Cpf</label>
                    <li><input type="text" name="txtCpf" placeholder="cpf" class="input"/>
                    </li><li></li>

                    <label for="">Nome</label>
                    <li><input type="text" name="txtNome" placeholder="nome" class="input"/>
                    </li><li></li>

                    <label for="">Email</label>
                    <li><input type="text" name="txtEmail" placeholder="email" class="input"/>
                    </li><li></li>

                    <label for="">Telefone</label>
                    <li><input type="text" name="txtTelefone" placeholder="nome" class="input"/>
                    </li><li></li>

                    <label for="">Turno</label>
                    <li><input type="text" name="txtTurno" placeholder="turno" class="input">
                    </li><li></li>

                    <label for="">Vara Processual</label>
                    <li><input type="text" name="txtVara" placeholder="vara processual" class="input"/>
                    </li><li></li>

                    <label for="">Descrição</label>
                    <li><input type="text" name="txtDescricao" placeholder="descrição" class="input"/>
                    </li><li></li>

                    <li><input type="submit" value="Cadastrar" class="botao" />
                    </li>

                </ol>
            </div>
    </form>
</body>
</html>