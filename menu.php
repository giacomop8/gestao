<link rel="stylesheet" href="estilo.css">
<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100&display=swap" rel="stylesheet">
<nav class="navbar">
    <div id="toggle">
        <button onclick="mostrarEfecharMenu('menu')" style="cursor: pointer; background: none; border: none"><img src="http://localhost/projetos/gestao/img/toggle.png"></button>
    </div>

    <div id="menu">
        <center>
            <div>
                Giácomo |
                ADM |
                01:30 |
                Sair
            </div>
        </center>
        <div id="titulo-menu">
            <a>| Sistema de Gestão |</a>
        </div>
        <ul>
            <li onclick="location.href='http://localhost/projetos/gestao/home.php';"><img id="img-link" src="http://localhost/projetos/gestao/img/home.png"><a id="li-link">Home</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao/producao.php';"><img id="img-link" src="http://localhost/projetos/gestao/img/producao.png"><a id="li-link">Produção</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao/agenda.php';"><img id="img-link" src="http://localhost/projetos/gestao/img/agenda.png"><a id="li-link">Agenda</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao/clientes.php';"><img id="img-link" src="http://localhost/projetos/gestao/img/cliente.png"><a id="li-link">Clientes</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao/produtos.php';"><img id="img-link" src="http://localhost/projetos/gestao/img/produto.png"><a id="li-link">Produtos</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao/usuario.php';"><img id="img-link" src="http://localhost/projetos/gestao/img/usuario.png"><a id="li-link">Usuários</a></li>
        </ul>
    
    </div>
</nav>