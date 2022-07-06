<link rel="stylesheet" href="estilo.css">
<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100&display=swap" rel="stylesheet">
<nav class="navbar">
    <div id="toggle">
        <button onclick="mostrarEfecharMenu('menu')" style="cursor: pointer; background: none; border: none"><img src="http://localhost/projetos/gestao2/img/toggle.png"></button>
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
            <li onclick="location.href='http://localhost/projetos/gestao2/home.php';"><img id="img-link" src="http://localhost/projetos/gestao2/img/home.png"><a id="li-link">Home</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao2/producao.php';"><img id="img-link" src="http://localhost/projetos/gestao2/img/producao.png"><a id="li-link">Produção</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao2/agenda.php';"><img id="img-link" src="http://localhost/projetos/gestao2/img/agenda.png"><a id="li-link">Agenda</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao2/clientes.php';"><img id="img-link" src="http://localhost/projetos/gestao2/img/cliente.png"><a id="li-link">Clientes</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao2/produtos.php';"><img id="img-link" src="http://localhost/projetos/gestao2/img/produto.png"><a id="li-link">Produtos</a></li>
            <li onclick="location.href='http://localhost/projetos/gestao2/usuario.php';"><img id="img-link" src="http://localhost/projetos/gestao2/img/usuario.png"><a id="li-link">Usuários</a></li>
        </ul>
    
    </div>
</nav>