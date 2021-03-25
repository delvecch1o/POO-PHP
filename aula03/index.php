<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Branca";
       // $c1->ponta= "6";
       // $c1->carga = "98";
       // $c1->tampada = true;
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
       
        
        
        ?>
        </pre>
    </body>
</html>
