<?php
    $n1 = 0;
    $n2 = 0;
    $media = 0;
    $result = "";
    
    if(isset($_POST['verificar'])){
    
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $media = ($n1 + $n2) / 2;
    if($media >= 7){
    $result = "Aprovado";

    }
    else if($media == 10){
        $result = "Aprovado com Distinção"; 
    }
      else if($media < 7){
            $result = "Reprovado";
      }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        Nota 1 <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Nota 2  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br>
        <input type="submit" value="verifica" name="verificar">
        <br><br>
        
        <p>Resultado: <?= $result, " sua media é: ", $media ?> </p>
    </form>

</body>
</html>