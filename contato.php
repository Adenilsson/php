<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            width: 30%;
            padding: auto;
            background-color:aqua;
            border: 1px solid blue;
            padding-left: 60px;
            padding-right: 60px;
        }
        fieldset legend{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            color: blue;
        }
        label{
            font-size: 22px;
            font-family: Arial, Helvetica, sans-serif;
        }
        input[type="text"], input[type="email"]{ 
            height: 25px;
            width: 100%;
        }
        input[type="tel"]{
            height: 25px;
            width: 100%;
        }
        input[type="submit"]{
            height: 35px;
            width: 50%;
            background-color: rgb(6, 211, 6);
            border-radius: 5px 5px 5px 5px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <form>
        <fieldset>
            <legend>Cadastro Contato:</legend>
            <label>
                Nome:<br>
                <input type="text" name="nome">
            </label><br><br>
            <label>
                Email:<br>
                <input type="email" name="email">
            </label><br><br>
            <label>
                Telefone: <br>
                <input type="tel" name="telefone">
            </label><br><br>
            <label><input type="submit" value="Cadastrar"></label>
        </fieldset>

    </form>
    <?php 
    $nome = array();
    $email = array();
    $telefone = array();
  
    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['telefone'])){
        //$_SESSION['lista_contato'][]['nome'] = $_GET['nome'];
        //$_SESSION['lista_contato']['email'] = $_GET['email'];
        //$_SESSION['lista_contato']['telefone'] =$_GET['telefone'];
        echo $_GET['nome']."<br>";
        echo $_GET['email']."<br>";
        echo $_GET['telefone']."<br>";

        $nome ['nome']=  $_GET['nome'];
        $nome['email'] = $_GET['email'];
        $nome['telefone']= $_GET['telefone'];  
        $_SESSION['lista_contato'][]="$nome[]";    
        print_r($nome);
    }
    $lista_contato = array();
    if(isset($_SESSION['lista_contato'])){
        $lista_contato []= $_SESSION['lista_contato'];
    }
    //var_dump($lista_contato);
   
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</ht>
        </tr>
        
        <?php var_dump($lista_contato); foreach ($lista_contato as $contato ):?>
          
            <tr>
                <td><?php echo $contato["nome"];?><td>
                <td><?php echo $contato['email'];?><td>
                <td><?php echo $contato['telefone'];?><td>
            </tr>
            
        <?php var_dump($contato); endforeach; ?>
        
    </table>
   
</body>
</html>