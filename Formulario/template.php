
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
<style>
    td,tr {
            border: 1px solid ;
            padding: 8px;
            text-align: center;
    }
    </style>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <!--Aqui irá o restante do codigo!-->
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
</label>
<label>
    Descrição (Opcional)
    <textarea name="descricao"></textarea>
</label>
        <label>        
            Prazo(Opcional):
                <input type="text" name="prazo" />
        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked />
                Baixa
                <input type="radio" name="prioridade" value="media" />
                Média
                <input type="radio" name="prioridade" value="alta"  />
                Alta
</label>
</fieldset>
<label>
    Tarefa Concluída:
    <input type="checkbox" name="concluida" value="sim"  />
</label>
<input type="submit" value="Cadastrar" />
</fieldset>
</form>
<table>
    <tr>
        <th>Tarefas</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
    </tr>
<?php foreach ($lista_tarefas as $tarefa) : ?>
    <tr>
        <td><?php echo $tarefa['nome']; ?> </td>
        <td><?php echo $tarefa['descricao']; ?> </td>
        <td><?php echo $tarefa['prazo']; ?> </td>
        <td><?php echo $tarefa['prioridade']; ?> </td>
        <td><?php echo $tarefa['concluida']; ?> </td>
    </tr>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>