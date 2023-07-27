<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="exercicio.php" method="POST">
        <label for="txt_ano">Ano de nascimento:</label><br>
        <input type="text" name="txt_ano"><br>
        <input type="submit" value="Verificar">    
    </form>
    <?php
        verificarIdade($_POST['txt_ano']);
        function verificarIdade($ano){
            $idade = 2023 - $ano;
            if($idade>=18){
                echo "Você pode tirar habilitação.";
            }
            else{
                echo "Você deverá esperar completar 18 anos para tirar habilitação.";
            }

        }
    
    
    ?>
</body>
</html>