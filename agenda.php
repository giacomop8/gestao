<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="http://localhost/projetos/gestao2/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"></head>
    <style>
        #descricao {
            width: 100%;
            resize: none;
            border: 1px solid;
            border-radius: 5px;
            border-color: rgb(194, 194, 194);
            font-family: 'Ubuntu', sans-serif;
            font-size: 1em;
            padding: 5px;
        }
    </style>
<body>
    <div class="container">
        <nav>
            <?php include('menu.php'); ?>
        </nav>
        <section>
            <div id="conteudo">
                <button onclick="mostrarEFecharModal('modal')" id="btn-novo-form">Nova tarefa</button>
                
                <hr>

                <div id="lista">
                    <table>
                        <thead>                            
                            <tr>
                                <th id="itemTh">Título</th>
                                <th>Data</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="itemTd">Fazer topo de bolo rápido</td>
                                <td>23/06/2022</td>
                                <td><a href=""><img src="img/ver.png" alt=""></a></td>
                                <td><a href=""><img src="img/lixeira.png" alt=""></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>

                <div id="modal-cadastro">                
                    <div id="modal-conteudo">
                        <form>
                            <h1 id="titulo-ficha">Adicionar tarefa</h1>
                            <hr>
                            <div>
                                <div id="agenda">
                                    <label id="titulo-form">Título:</label>
                                    <input id="dados" type="text" placeholder="Título"> <br><br>
        
                                    <label id="titulo-form">Descrição:</label> <br>
                                    <textarea id="descricao" type="text" rows="10"></textarea> <br><br>
                                    
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