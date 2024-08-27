<!DOCTYPE html>
<header>
</header>
<body>
    <?php
        $numero = 17;
        if($numero >= 65){
            echo"Sua idade é acima de 65 anos, apenas uso com restrições";
        } elseif ($numero >= 16){
            echo "Sua idade é acima ou igual a 16 anos, pode o uso do medicamento";
        } else {
            echo"Proibido o uso do medicamento";
        }
        /* DICA: PODE COLOCAR PARA IMPRIMIR NA TELA ASSIM TAMBÉM: (echo $numero."mensagem";*/
    ?>
</body>
</html>
