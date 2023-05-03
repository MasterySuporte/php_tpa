
<?php
    $n1 = 0;
    $result = "";
    
    if(isset($_POST['verificar'])){
    
        $n1 = (int)$_POST['n1'];

        if($n1 > 0){
            $result  = 'o numero e positivo';
        }
        else if($n1 < 0){
            $result  = 'o numero e negativo';
        }
        else if($n1 == 0){
            $result  = 'o numero e nulo';
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    
    <form method="post">
        O número: <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        <input type="submit" value="verifica" name="verificar">
        <br><br>
        
        <p>Resultado: <?= $result ?> </p>
    </form>

</body>
</html>
