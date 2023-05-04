const botoes = document.querySelectorAll('.btn');
const elementoHtml = document.getElementById('areaForm');

botoes.forEach(btn => btn.addEventListener('click', mudarSessao))
function mudarSessao(){
    elementoHtml.innerHTML = '';
    const elementoBtn = document.getElementById(this.id);
    const actionType = elementoBtn.innerText;
    
    if(actionType == "Cadastrar Produto") {
       elementoHtml.innerHTML +=
        `
        <div id = "formulario">
        <h1>Cadastrar Produto</h1>
            <input class="inputProduto" id="IdProduto" type="text" placeholder="ID Produto"><br>
            <input class="inputProduto" id="Descricao" type="text" placeholder="Descrição">
            <input class="inputProduto" id="Qtde" type="number" placeholder="Quantidade"><br>
            <button> Cadastrar </button>
    </div>
        `    

    } else if(actionType == "Consultar Produto"){
        elementoHtml.innerHTML +=
        `
        <div id = "formulario">
        <h1>Consultar Produto</h1>
            <input class="inputProduto" id="IdProduto" type="text"placeholder="ID do Produto"><br>
        <button> Consultar </button>
        
    </div>
        `
    } else if(actionType == "Editar Produto"){
        elementoHtml.innerHTML +=
        `
        <div id = "formulario">
        <h1>Editar Produto</h1>
            <input class="inputProduto" id="IdProduto" type="text" placeholder="ID Produto"><br>
            <input class="inputProduto" id="Descricao" type="text" placeholder="Descrição">
            <input class="inputProduto" id="Qtde" type="number" placeholder="Quantidade"><br>
        <button> Editar </button>
        `
        
    }else{
        elementoHtml.innerHTML +=
        `
        <div id = "formulario">
        <h1>Excluir Produto</h1>
            <input class="inputProduto" id="IdProduto" type="text"placeholder="ID do Produto"><br>
            <input class="inputProduto" id="IdProduto" type="text"placeholder="Justificativa">
        <button> Excluir </button
        `
    }
}