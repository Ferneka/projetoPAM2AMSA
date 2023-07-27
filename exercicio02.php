<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="exercicio02.php" method="POST">
        <label for="txt_nome">Nome:</label>
        <input type="text" name="txt_nome"> <br>
        <input type="submit" value="Verificar Nome" name="verificar">
        <input type="submit" value="Contar Letras" name="contar">
    </form>
    <?php
        if(isset($_POST['verificar'])){
            verificarNome($_POST['txt_nome']);
        }
        if(isset($_POST['contar'])){
            contarLetras($_POST['txt_nome']);
        }
        function verificarNome($nome){
            if($nome != ""){
                echo "Nome: ". $nome;
            }
            else{
                echo "Não foi digitado nenhum nome.";
            }
        }
        function contarLetras($nome2){
            if($nome2 != ""){
                $contar = strlen($nome2);
                echo ucfirst($nome2) . " possui " . $contar . " letras. ";
            }
            else{
                echo "Não foi digitado nenhum nome.";
            }
        }
       
    
    
    
    
    
    ?>
</body>
</html>