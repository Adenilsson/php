<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estamos em <?php echo date('d/M/Y');?></h1>
    <p>Agora são <?php echo date('H');?> horas e <?php echo date('i');?> minutos
.</p>
    <table>
        
        <tr>
            <th>Dom </td>
            <th>Seg </td>
            <th>Ter </td>
            <th>Qua </td>
            <th>Qui </td>
            <th>Sex </td>
            <th>Sab </td>
        </tr>
        <?php calendario();?>
    </table>
    <br>
    <?php cordial();
    ?>

</body>
</html>
<?php
echo "hoje é dia" . date('D/M/Y'); //com 'y' minuscolo apresenta o ano resumido '23' e  com 'Y' maiusculo presena o ano completo '2023'
echo " Agora são ".date('h:i:s');
$hoje = date('d/m/Y');
function linha($semana){
    echo "<tr>
            <td>{$semana[0]}</td>
            <td>{$semana[1]}</td>
            <td>{$semana[2]}</td>
            <td>{$semana[3]}</td>
            <td>{$semana[4]}</td>
            <td>{$semana[5]}</td>
            <td>{$semana[6]}</td>
        </tr>";
}
function calendario(){
    $dia=1;
    $semana = array();
    while($dia <=31){
        
        if($dia == date('d')){
            array_push($semana, "<b>".$dia."</b>");
        }else{
            array_push($semana, $dia);
        }
      
       
        if(count($semana) == 7){
            linha($semana);
            $semana =array();
        }
        
        $dia++;
    }
    linha($semana);
}
function cordial(){
    $hora = date('H');
    if($hora > 00 && $hora <= 12 ){
        echo "Bom dia!!";
    }else if($hora >12 && $hora <= 18){
        echo "Boa tarde!!";
    }else{
        echo"Boa Noite!!";
    }

}