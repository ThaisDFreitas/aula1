<h1>Novo Jogo</h1>
<form action="jogo_new.php" method="POST">
    <table>
        <tr><td>Nome <td> <input type="text" name="nome" id="nome" size="40" maxlength="40">
        <tr><td>Genero <td> <input type="text" name="genero" id="genero" size="10" maxlength="10">
        <tr><td>Produtora <td> <input type="text" name="produtora" id="produtora" size="10" maxlength="10">
        <tr><td>Descrição <td> <input type="text" name="descricao" id="descricao" size="50" maxlength="50">
        <tr><td>Nota <td><select name="nota" id="nota">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
        <tr><td><input type="submit" value="Gravar Jogo">
    </table>
</form>