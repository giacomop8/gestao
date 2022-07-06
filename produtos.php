<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="http://localhost/projetos/gestao/estilo.css">
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
                <button onclick="mostrarEFecharModal('modal')" id="btn-novo-form">Novo produto</button>
                
                <hr>

                <div id="lista">
                    <table>
                        <thead>                            
                            <tr>
                                <th id="item">Item</th>
                                <th>Preço</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="item">Banner</td>
                                <td>R$ 110,00 m²</td>
                                <td><a href=""><img src="img/editar.png" alt=""></a></td>
                                <td><a href=""><img src="img/lixeira.png" alt=""></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>

                <div id="modal-cadastro">                
                    <div id="modal-conteudo">
                        <form>
                            <h1 id="titulo-ficha">Ficha de cadastro de Produtos</h1>
                            <hr>
                            <div>
                                <div id="cadastro-produto">
                                    <label id="titulo-form">Nome do Produto:</label>
                                    <input id="dados" type="text" placeholder="Nome"> <br><br>
        
                                    <label id="titulo-form">Valor:</label> <br>
                                    <input id="dados" type="text" placeholder="R$"> <br><br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" id="btn-cadastro-usuario">salvar</button>
                                <button onclick="mostrarEFecharModal('modal')" id="btn-modal">cancelar</button>
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