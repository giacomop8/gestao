<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produção</title>
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
                <button onclick="mostrarEFecharModal('modal')" id="btn-novo-form">Histórico de pedidos</button>
                
                <hr>

                <div id="lista">
                    <table>
                        <thead>                            
                            <tr>
                                <th id="itemTh">Pedido</th>
                                <th>Cliente</th>
                                <th>Data</th>
                                <th>Prazo</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="itemTd">Banner 1x1m², 3 quadros decorativos, 100un adesivos 5x5cm redondo</td>
                                <td>Tamires Suele Lima</td>
                                <td>22/06/2022</td>
                                <td>29/06/2022</td>
                                <td>R$ 230,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>

                <div id="modal-cadastro">                
                    <div id="modal-conteudo">
                        <form>
                            <h1 id="titulo-ficha">Ficha de cadastro de Usuário</h1>
                            <hr>
                            <div id="flex">
                                <div id="texto">
                                    <label id="titulo-form">Nome Completo:</label>
                                    <input id="dados" type="text" placeholder="Nome completo"> <br><br>
        
                                    <label id="titulo-form">Usuário:</label> <br>
                                    <input id="dados" type="text" placeholder="Usuário para login"> <br><br>
                                    
                                    <label id="titulo-form">Senha:</label> <br>
                                    <input id="dados" type="password" placeholder="Senha para login"> <br><br>                        
                                    
                                    <label id="titulo-form">Tipo:</label>
                                    <input type="radio" name="radio" value="adm"> ADM <input type="radio" name="radio" value="padrao"> Padrão <br><br>
                                </div>
                                <div id="texto">
                                    <label id="titulo-form">Endereço:</label> <br><br>
                                    
                                    <label id="titulo-form">Rua:</label> <br>
                                    <input id="dados" type="text" placeholder="Rua"> <br><br>
                                    
                                    <label id="titulo-form">Número:</label> <br>
                                    <input id="dados" type="text" placeholder="Número"> <br><br>
                                    
                                    <label id="titulo-form">Bairro:</label> <br>
                                    <input id="dados" type="text" placeholder="Bairro"> <br><br>
                                    
                                    <label id="titulo-form">Cidade:</label> <br>
                                    <input id="dados" type="text" placeholder="Cidade"> <br><br>
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