<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="http://localhost/projetos/gestao2/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"></head>
<body>
    <div class="container">
        <nav>
            <?php include('menu.php'); ?>
        </nav>
        <section>
            <div id="conteudo">
                <button onclick="mostrarEFecharModal('modal-cadastro')" id="btn-novo-form">Novo usuário</button>
                
                <hr>

                <div id="lista">
                    <table>
                        <thead>                            
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                            include('conexao.php');
                            $select = "SELECT * FROM usuarios ORDER BY nome_usuario";
                            $resultado = mysqli_query($conexao, $select);
                            while($dados = mysqli_fetch_array($resultado)){ ?>
                            <tr>
                                <td><?=$dados['nome_usuario']?></td>
                                <td><?=$dados['usuario']?></td>
                                <td><a href="usuarios/editar.php?editaid=<?=$dados['id_usuario']?>"><img src="img/editar.png" alt=""></a></td>
                                <td><a href="#" onClick="verificaExclusao(<?=$dados['id_usuario']?>)"><img src="img/lixeira.png" alt=""></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <br>

                <div id="modal-cadastro">                
                    <div id="modal-conteudo">
                        <form method="post">
                            <h1 id="titulo-ficha">Ficha de cadastro de Usuário</h1>
                            <hr>
                            <div id="flex">
                                <div id="texto">
                                    <label id="titulo-form">Nome Completo:</label>
                                    <input name="nome" id="dados" type="text" placeholder="Nome completo"> <br><br>
        
                                    <label id="titulo-form">Usuário:</label> <br>
                                    <input name="usuario" id="dados" type="text" placeholder="Usuário para login"> <br><br>
                                    
                                    <label id="titulo-form">Senha:</label> <br>
                                    <input name="senha" id="dados" type="password" placeholder="Senha para login"> <br><br>                        
                                    
                                    <label id="titulo-form">Tipo:</label>
                                    <input name="radio" type="radio" value="adm"> ADM <input type="radio" name="radio" value="padrao"> Padrão <br><br>
                                </div>
                                <div id="texto">
                                    <label id="titulo-form">Endereço:</label> <br><br>
                                    
                                    <label id="titulo-form">Rua:</label> <br>
                                    <input name="rua" id="dados" type="text" placeholder="Rua"> <br><br>
                                    
                                    <label id="titulo-form">Número:</label> <br>
                                    <input name="numero" id="dados" type="text" placeholder="Número"> <br><br>
                                    
                                    <label id="titulo-form">Bairro:</label> <br>
                                    <input name="bairro" id="dados" type="text" placeholder="Bairro"> <br><br>
                                    
                                    <label id="titulo-form">Cidade:</label> <br>
                                    <input name="cidade" id="dados" type="text" placeholder="Cidade"> <br><br>
                                </div>
                            </div>
                            <center>
                                <button name="cadastro" type="submit" id="btn-cadastro-usuario">salvar</button>
                                <button onclick="mostrarEFecharModal('modal')" id="btn-modal">cancelar</button>
                            
                                <?php
                                    if(isset($_POST['cadastro'])) {
                                        $nome = $_POST['nome'];
                                        $usuario = $_POST['usuario'];
                                        $senha = $_POST['senha'];
                                        $contato = $_POST['contato'];
                                        $email = $_POST['email'];
                                        $rua = $_POST['rua'];
                                        $numero = $_POST['numero'];
                                        $bairro = $_POST['bairro'];
                                        $cidade = $_POST['cidade'];

                                        $usuario = new Usuario;
                                        $usuario->criarUsuario($nome, $usuario, $senha, $contato, $email, $rua, $numero, $bairro, $cidade);

                                    }
                                ?>
                            </center>
                            <br>
                            <br>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>