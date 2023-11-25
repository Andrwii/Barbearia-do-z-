<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; 
        $servidor = "localhost";
        $usuario = "usuario";
        $senha = "";
        $bd = "barba_bigode";

        //criando uma conexão
        $conn = mysqli_connect($servidor, $usuario, $senha, $bd);

        // verificando a conexão
        if (!$conn) {
            die("Falha na conexão" . mysqli_connect_error());
        }
        else {
            echo 'conectado';
        }
        ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">

                <h1><span>Agende o atendimento</span></h1>

                <ol>

                    <li><input type="text" name="txtNome" placeholder="NOME COMPLETO" class="input" value=""/>
                    </li>
                    <li></li>
                    
                    <label for="selecionar-servico">Serviço</label>
                    <li>
                    <select name="servico" id="" class="drop"></select></li><li></li>

                    <label for="selecionar-filial">Filial</label>
                    <li>
                    <select name="filial" id="" class="drop"></select></li><li></li>

                    <label for="escrever-data">Data</label>
                    <li>
                    <input type="text" name="txtData" placeholder="MM/DD/AAAA" class="input"/>
                    </li><li></li>

                    <label for="selecionar-horario">Horário preferencial de atendimento</label>
                    <li>
                    <select name="horario" id="" class="drop">
                    <option value="">07:00 ÁS 09:00</option>
                    <option value="">09:00 ÁS 10:30</option>
                    <option value="">10:30 ÁS 12:00</option>
                    <option value="">13:00 ÁS 15:00</option>
                    <option value="">15:00 ÁS 16:30</option>
                    <option value="">16:30 ÁS 19:00</option>
                    </select>
                    </li>

                    <li><input type="submit" value="Cadastrar" class="botao" />
                    </li>

                </ol>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
