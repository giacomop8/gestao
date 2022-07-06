<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Cliente</title>
    <script src="../script.js"></script>
    <link rel="stylesheet" href="http://localhost/projetos/gestao2/estilo.css">
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
                    $select = "SELECT * FROM usuarios WHERE id_usuario='$editaid'";
                    $resultado = mysqli_query($conexao, $select);
                    $dados = mysqli_fetch_array($resultado);
                ?>
                <form method="get">
                    <h1 id="titulo-ficha">Editar dados do Usuários</h1>
                    <hr>
                    <div id="flex">
                        <div id="texto">
                            <input name="id_usuario" type="hidden" value="<?=$dados['id_usuario']?>">
            
                            <label id="titulo-form">Nome Completo:</label>
                            <input name="nome" id="dados" type="text" value="<?=$dados['nome_usuario']?>"> <br><br>
            
                            <label id="titulo-form">Usuario:</label> <br>
                            <input name="usuario" id="dados" type="text" value="<?=$dados['usuario']?>"> <br><br>
                            
                            <label id="titulo-form">Senha:</label> <br>
                            <input name="senha" id="dados" type="password" placeholder="Nova Senha" value="<?=$dados['senha']?>"> <br><br>
                            
                            <label id="titulo-form">Contato:</label> <br>
                            <input name="contato" id="dados" type="text" value="<?=$dados['contato_usuario']?>"> <br><br>
                            
                            <label id="titulo-form">E-mail:</label> <br>
                            <input name="email" id="dados" type="text" value="<?=$dados['email_usuario']?>"> <br><br>
                        </div>
                        <div id="texto">
                            <label id="titulo-form">Endereço:</label> <br><br>
                            
                            <label id="titulo-form">Rua:</label> <br>
                            <input id="dados" type="text" name="rua" value="<?=$dados['rua_usuario']?>"> <br><br>
                            
                            <label id="titulo-form">Número:</label> <br>
                            <input id="dados" type="text" name="numero" value="<?=$dados['numero_usuario']?>"> <br><br>
                            
                            <label id="titulo-form">Bairro:</label> <br>
                            <input id="dados" type="text" name="bairro" value="<?=$dados['bairro_usuario']?>"> <br><br>
                            
                            <label id="titulo-form">Cidade:</label> <br>
                            <input id="dados" type="text" name="cidade" value="<?=$dados['cidade_usuario']?>"> <br><br>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="btn-cadastro-usuario" name="btn-editando">salvar</button>
                        <button type="submit" id="btn-modal" name="btn-cancelar">cancelar</button>
                        
                        <!-- CADASTRANDO PHP -->
                        <?php
                            if (isset($_GET['btn-cancelar'])) {
                                echo "<script>
                                        window.location.href='http://localhost/projetos/gestao2/usuarios.php'
                                    </script>";
                            }
                            else if(isset($_GET['btn-editando'])) {
                                /* $id_cliente = $_GET['id_cliente'];
                                $nome = $_GET['nome'];
                                $contato = $_GET['contato'];
                                $email = $_GET['email']; */
                                /* $sexo = $_GET['sexo']; */
                                /* $rua = $_GET['rua'];
                                $numero = $_GET['numero'];
                                $bairro = $_GET['bairro'];
                                $cidade = $_GET['cidade'];

                                $cliente = new Cliente;

                                $cliente->editarCliente($id_cliente, $nome, $contato, $email, $rua, $numero, $bairro, $cidade); */
                            }
                        ?>
                    </center>                    
                </form>
            </div>
        </section>
    </div>
</body>
</html>

