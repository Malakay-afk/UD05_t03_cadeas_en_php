<html>
    <head>
        <meta http-equiv="Content_Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Construción de expresión en PHP</h3>

        <?php
            $primeira="Primeira liña de texto";
            $segunda="Segunda liña de texto";
            $terceira="Terceira liña de texto";
            $resultado=$primeira."<br/>".$segunda."<br/>".$terceira;
            echo $resultado;
            echo "<br/> O número de carácteres de cadea resultante é: ".strlen($resultado);
        ?>
    </body>
</html>