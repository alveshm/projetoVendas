<form method="POST" action="<?= $url ?>/produtos/add">
    <input type="text" name="nome" id="nome">
    <input type="text" name="descricao" id="descricao">
    <select name="tipo_produto" id="tipo-produto">
        <option value="1">TESTE1</option>
        <option value="2">TESTE2</option>
        <option value="3">TESTE3</option>
    </select>
    <button type="submit">Salvar</button>
</form>