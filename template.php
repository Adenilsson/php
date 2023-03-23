<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<style>
    body{
       padding: 0px 40px 0px 40px;
    }
   h1{
    margin-left: 35%;
   }
 .principal{
        width: 350px;
        margin-left: 35%;
        border: 2px solid cornflowerblue;
        border-style: double;
        text-align: left;
        background-color: aqua;
        
    }
.principal legend{
        width: 220px;
        height: 30px;
        font-size: 22px;
        background-color: rgb(70, 22, 126);
        color: rgb(221, 224, 217);
        margin-top: 10px;
        margin-left: 0px;
    }
.principal fieldset{
        width: 320px;
        border-style: double;
        border: 1px solid cornflowerblue;
        
    }
    label{
        font-size: 22px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgb(21, 29, 29);
        margin-top: 30px;
        
    }
    input[type="text"]{
        height: 30px;
        width: 340px;
        border-color: blueviolet;
        margin-bottom: 10px;
    }
    input[type="number"]{
        height: 30px;
        width: 340px;
        border-color: blueviolet;
        margin-bottom: 10px;
    }
    input[type="radio"]{
        height: 20px;
        width: 20px;

    }
    textarea{
        width: 340px;
        height: 80px;
    }
    input[type="checkbox"]{
        height: 20px;
        width: 20px;
        margin-bottom: 0px;
    }
    input[type="submit"]{
        height: 30px;
        width: 300px;
        background-color: #2d8106;
        margin-left: 20px;
        box-shadow: 5px 5px 5px black;
        border-radius: 5px;
    }
    input[type="submit"]:active{
        height: 30px;
        width: 300px;
        background-color: #52f107;
        margin-left: 20px;
        box-shadow: 0px 0px 0px black;
        border-radius: 5px;
        color: aquamarine;
    }
    table{
        
        border: 1px solid #111311;
        margin-top: 20px;
    }
    th{
        color: #111311;
        height: 30px;
        font-size: 22px;
        background-color: antiquewhite;
    }
    
    
</style>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset class="principal">
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:<br>
                <input type="text" name="nome" required autocomplete="true" placeholder="[Insira um Título aqui.]">
            </label><br>
            <label>
                Descrição (Opcional):<br>
                <textarea name="descricao" placeholder="[Descreva sua tarefa, qual o objetico e metodos você vai usar.]"></textarea>
            </label><br>
            <label>
                Prazo (Opcional):<br>
                <input type="number" name="prazo" placeholder="[Prazo em dias]">
            </label><br>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="baixa" checked>
                    Baixa
                    <input type="radio" name="prioridade" value="media">
                    Média
                    <input type="radio" name="prioridade" value="alta">
                    Alta
                </label>
            </fieldset><br>
            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="sim">
            </label><br>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluida</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa): ?>
        <tr>
            <td><?php echo $tarefa['nome'];?></td>
            <td><?php echo $tarefa['descricao'];?></td>
            <td><?php echo $tarefa['prazo'];?></td>
            <td><?php echo $tarefa['prioridade'];?></td>
            <td><?php echo $tarefa['concluida'];?></td>
        </tr>
        <?php  endforeach;?>
    </table>
</body>
</html>