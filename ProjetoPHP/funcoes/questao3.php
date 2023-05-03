<?php
    $sexo = "";
    $result = "";
    
    if(isset($_POST['verificar'])){
    
        $sexo = (string) strtoupper ($_POST['sexo']);

    if($sexo == "F"){
    $result = "O sexo é feminino";

    }
     else if($sexo == "M"){
    $result = "O sexo é masculino";
    }
    else {
            $result = "O sexo é invalido";
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
        <input type="text" name="sexo" value= <?= $sexo?> > <br>
        <input type="submit" value="verifica" name="verificar">
        <br><br>
        
        <p>Resultado: <?= $result ?> </p>
    </form>

</body>
</html>