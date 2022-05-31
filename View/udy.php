<form method="post" action="/processa">
    <label for="nome">Nome:</label>
    <input id="nome" name="nome" type="text" /> <br />

    <label for="sexo">Sexo:</label>
    <input id="sexo" name="sexo" type="radio" value="F" />Feminino
    <input name="sexo" type="radio" value="M" /> Masculino <br />

    <label for="termos">Aceito os Termos</label>
    <input id="termos" name="termos" type="checkbox" /> Aceito tudo <br />

    <label for="estado">Estado:</label>
    <select id="estado" name="estado">
        <option value="SP">São Paulo</option>
        <option value="MG">Minas Gerais</option>
    </select> <br />

    <button type="submit">Enviar</button>
</form>