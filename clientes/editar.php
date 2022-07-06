<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Cliente</title>
    <script src="../script.js"></script>
    <link rel="stylesheet" href="http://localhost/projetos/gestao/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
    
        <nav>
            <?php include('../menu.php'); ?>
            <?php include('../functions.php'); ?>
        </nav>
        <section>

            <div id="conteudo">
                <?php
                    include('../conexao.php');
            
                    $editaid = $_GET['editaid'];
                    $select = "SELECT * FROM clientes WHERE id_cliente='$editaid'";
                    $resultado = mysqli_query($conexao, $select);
                    $dados = mysqli_fetch_array($resultado);
                ?>
                <form method="get">
                    <h1 id="titulo-ficha">Editar dados do Cliente</h1>
                    <hr>
                    <div id="flex">
                        <div id="texto">
                            <input name="id_cliente" type="hidden" value="<?=$dados['id_cliente']?>">
            
                            <label id="titulo-form">Nome Completo:</label>
                            <input id="dados" type="text" name="nome" value="<?=$dados['nome_cliente']?>"> <br><br>
            
                            <label id="titulo-form">Contato:</label> <br>
                            <input id="dados" type="text" name="contato" value="<?=$dados['contato_cliente']?>"> <br><br>
                            
                            <label id="titulo-form">E-mail:</label> <br>
                            <input id="dados" type="email" name="email" value="<?=$dados['email_cliente']?>"> <br><br>                        
                            
                            <label id="titulo-form">Sexo:</label>
                            <input type="radio" name="radio" value="masculino"> Masculino <input type="radio" name="radio" value="feminino"> Feminino <br><br>
                        </div>
                        <div id="texto">
                            <label id="titulo-form">Endereço:</label> <br><br>
                            
                            <label id="titulo-form">Rua:</label> <br>
                            <input id="dados" type="text" name="rua" value="<?=$dados['rua_cliente']?>"> <br><br>
                            
                            <label id="titulo-form">Número:</label> <br>
                            <input id="dados" type="text" name="numero" value="<?=$dados['numero_cliente']?>"> <br><br>
                            
                            <label id="titulo-form">Bairro:</label> <br>
                            <input id="dados" type="text" name="bairro" value="<?=$dados['bairro_cliente']?>"> <br><br>
                            
                            <label id="titulo-form">Cidade:</label> <br>
                            <input id="dados" type="text" name="cidade" value="<?=$dados['cidade_cliente']?>"> <br><br>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="btn-cadastro-usuario" name="btn-editando">salvar</button>
                        <button type="submit" id="btn-modal" name="btn-cancelar">cancelar</button>
                        
                        <!-- CADASTRANDO PHP -->
                        <?php
                            if (isset($_GET['btn-cancelar'])) {
                                echo "<script>
                                        window.location.href='http://localhost/projetos/gestao2/clientes.php'
                                    </script>";
                            }
                            else if(isset($_GET['btn-editando'])) {
                                $id_cliente = $_GET['id_cliente'];
                                $nome = $_GET['nome'];
                                $contato = $_GET['contato'];
                                $email = $_GET['email'];
                                /* $sexo = $_GET['sexo']; */
                                $rua = $_GET['rua'];
                                $numero = $_GET['numero'];
                                $bairro = $_GET['bairro'];
                                $cidade = $_GET['cidade'];

                                $cliente = new Cliente;

                                $cliente->editarCliente($id_cliente, $nome, $contato, $email, $rua, $numero, $bairro, $cidade);
                            }
                        ?>
                    </center>                    
                </form>
            </div>
        </section>
    </div>
</body>
</html>

