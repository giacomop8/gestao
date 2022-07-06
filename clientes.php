<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="http://localhost/projetos/gestao/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav>
            <?php include('menu.php'); ?>
            <?php include('functions.php'); ?>
        </nav>
        <section>
            <div id="conteudo">
                <button onclick="mostrarEFecharModal('modal-cadastro')" id="btn-novo-form">Novo cliente</button>
                
                <hr>

                <div id="lista">
                    <table>
                        <thead>                            
                            <tr>
                                <th>Nome</th>
                                <th>Contato</th>
                                <th>E-mail</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                            include('conexao.php');
                            $select = "SELECT * FROM clientes ORDER BY nome_cliente ";
                            $resultado = mysqli_query($conexao, $select);
                            while($dados = mysqli_fetch_array($resultado)){ ?>
                            <tr>
                                <td><?=$dados['nome_cliente']?></td>
                                <td><?=$dados['contato_cliente']?></td>
                                <td><?=$dados['email_cliente']?></td>
                                <td><a href="clientes/editar.php?editaid=<?=$dados['id_cliente']?>"><img src="img/editar.png" alt=""></a></td>
                                <td><a href="#" onClick="verificaExclusao(<?=$dados['id_cliente']?>)"><img src="img/lixeira.png" alt=""></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

                <br>

                <div id="modal-cadastro">                
                    <div id="modal-conteudo">
                        <form method="post">
                            <h1 id="titulo-ficha">Ficha de cadastro de Clientes</h1>
                            <hr>
                            <div id="flex">
                                <div id="texto">
                                    <label id="titulo-form">Nome Completo:</label>
                                    <input id="dados" type="text" name="nome" placeholder="Nome completo"> <br><br>
        
                                    <label id="titulo-form">Contato:</label> <br>
                                    <input id="dados" type="text" name="contato" placeholder="(38) 99999-9999"> <br><br>
                                    
                                    <label id="titulo-form">E-mail:</label> <br>
                                    <input id="dados" type="email" name="email" placeholder="Digite o e-mail"> <br><br>                        
                                    
                                    <label id="titulo-form">Sexo:</label>
                                    <input type="radio" name="radio" value="masculino"> Masculino <input type="radio" name="radio" value="feminino"> Feminino <br><br>
                                </div>
                                <div id="texto">
                                    <label id="titulo-form">Endereço:</label> <br><br>
                                    
                                    <label id="titulo-form">Rua:</label> <br>
                                    <input id="dados" type="text" name="rua" placeholder="Rua"> <br><br>
                                    
                                    <label id="titulo-form">Número:</label> <br>
                                    <input id="dados" type="text" name="numero" placeholder="Número"> <br><br>
                                    
                                    <label id="titulo-form">Bairro:</label> <br>
                                    <input id="dados" type="text" name="bairro" placeholder="Bairro"> <br><br>
                                    
                                    <label id="titulo-form">Cidade:</label> <br>
                                    <input id="dados" type="text" name="cidade" placeholder="Cidade"> <br><br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" id="btn-cadastro-usuario" name="btn-cadastrando">salvar</button>
                                <button onclick="mostrarEFecharModal('modal-cadastro')" id="btn-modal">cancelar</button>
                                
                                <!-- CADASTRANDO PHP -->
                                <?php
                                    if(isset($_POST['btn-cadastrando'])) {
                                        
                                        $nome = $_POST['nome'];
                                        $contato = $_POST['contato'];
                                        $email = $_POST['email'];
                                        $sexo = $_POST['sexo'];
                                        $rua = $_POST['rua'];
                                        $numero = $_POST['numero'];
                                        $bairro = $_POST['bairro'];
                                        $cidade = $_POST['cidade'];
                                        
                                        $cliente = new Cliente;
                                        $cliente->criarCliente($nome, $contato, $email, $sexo, $rua, $numero, $bairro, $cidade);
                                    }
                                ?>
                            </center>
                            <br>                            
                        </form>
                    </div>
                </div>                
            </div>
        </section>
    </div>
</body>
</html>