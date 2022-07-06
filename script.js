const mostrarEfecharMenu = (div) => {
    const menu = document.getElementById(div);
    const displayAtual = menu.style.display
    
    if(displayAtual == 'none') {
        menu.style.display = 'block'
    } else {
        menu.style.display = 'none'
    }
}

function mostrarEFecharModal(div) {
    const modal = document.getElementById(div)
    const displayAtual = modal.style.display
    
    if(displayAtual == 'block') {
        modal.style.display = 'none'
    }
    else {
        modal.style.display = 'block'
    }
}

function verificaExclusao(id){
    if(confirm("Tem certeza que deseja apagar esse Cliente?")){
        window.location="clientes/functions/excluindo.php?idexc=" + id
    }
}