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
        <form action="cadastrar.php" method="POST" id ="formulario">
            <h2>Cadastrar Produto</h2>
            <input class="inputProduto" name="idproduto" type="text" placeholder="ID Produto"><br>
            <input class="inputProduto" name="descricao" type="text" placeholder="Descrição do Produto">
            <input class="inputProduto" name="quantidade" type="number" placeholder="Quantidade"><br>
            <input class="inputProduto" name="valor" type="number" placeholder="Valor do Produto">
            <button type="submit">Cadastrar</button>
        </form>
        `    

    } else if(actionType == "Consultar Produto"){
        elementoHtml.innerHTML +=
        `
        <form action="consultar.php" method="POST" id = "formulario">
            <h2>Consultar Produto</h2>
            <input class="inputProduto" name="idproduto" type="text"placeholder="ID do Produto"><br>
            <button type="submit">Consultar</button>
        </form>
        `
    } else if(actionType == "Editar Produto"){
        elementoHtml.innerHTML +=
        `
        <form action="alterar.php" method="POST" id = "formulario">
        <h2>Editar Produto</h2>
            <input class="inputProduto" name="idproduto" type="text" placeholder="ID Produto"><br>
            <input class="inputProduto" name="descricao" type="text" placeholder="Descrição">
            <input class="inputProduto" name="quantidade" type="number" placeholder="Quantidade">
            <input class="inputProduto" name="valor" type="number" placeholder="Valor do Produto">
            <button type="submit">Editar</button>
        </form>
        `
        
    }else{
        elementoHtml.innerHTML +=
        `
        <form action="excluir.php" method="POST" id = "formulario">
        <h2>Excluir Produto</h2>
            <input class="inputProduto" name="IdProduto" type="text"placeholder="ID do Produto"><br>
            <input class="inputProduto" name="justificativa" type="text"placeholder="Justificativa">
            <button type="submit">Excluir</button>
        </form>
        `
    }
}