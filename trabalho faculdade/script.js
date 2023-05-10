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
        <form action="cadastrar.php" method="POST" id="formulario">
            <h2>Cadastrar Produto</h2>
            <input class="inputProduto" name="codproduto" type="number" placeholder="Código do Produto"><br>
            <input class="inputProduto" name="descricao" type="text" placeholder="Descrição do Produto">
            <input class="inputProduto" name="marca" type="text" placeholder="Marca">
            <input class="inputProduto" name="quantidade" type="number" placeholder="Quantidade"><br>
            <input class="inputProduto" name="preco" type="number" placeholder="preco do Produto">
            <input name="cadastro" id="btnform" type="submit" value="Cadastrar">
        </form>
        `    

    } else if(actionType == "Consultar Produto"){
        elementoHtml.innerHTML +=
        `
        <form action="consultar.php" method="POST" id="formulario">
            <h2>Consultar Produto</h2>
            <input class="inputProduto" name="codproduto" type="number" placeholder="Código do Produto"><br>
            <input name="consulta" id="btnform" type="submit" value="Consultar">
        </form>
        `
    } else if(actionType == "Editar Produto"){
        elementoHtml.innerHTML +=
        `
        <form action="alterar.php" method="POST" id = "formulario">
        <h2>Editar Produto</h2>
            <input class="inputProduto" name="codproduto" type="number" placeholder="Código do Produto"><br>
            <input class="inputProduto" name="descricao" type="text" placeholder="Descrição do Produto">
            <input class="inputProduto" name="marca" type="text" placeholder="Marca">
            <input class="inputProduto" name="quantidade" type="number" placeholder="Quantidade"><br>
            <input class="inputProduto" name="preco" type="number" placeholder="preco do Produto">
            <input name="alteracao" id="btnform" type="submit" value="Editar">
        </form>
        `
        
    }else{
        elementoHtml.innerHTML +=
        `
        <form action="excluir.php" method="POST" id = "formulario">
        <h2>Excluir Produto</h2>
            <input class="inputProduto" name="codproduto" type="number" placeholder="Código do Produto"><br>
            <input class="inputProduto" name="justificativa" type="text"placeholder="Justificativa">
            <input name="exclusao" id="btnform" type="submit" value="Excluir">
        </form>
        `
    }
}