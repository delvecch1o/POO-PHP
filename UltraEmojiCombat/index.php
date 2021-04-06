<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
         require_once 'Lutador.php';
         require_once 'Luta.php';
         $l = array();
         
         $l[0] = new Lutador("Jeremias", "França", 30, 1.75, 68.9 , 11, 2, 1);
                 
         $l[1] = new Lutador("Malaquias", "Brasil", 29, 1.68, 57.8 , 14, 2, 3);
                
         $l[2] = new Lutador("Zacarias", "EUA", 35, 1.65, 80.9, 12 , 2, 1);
         
         $l[3] = new Lutador("Joabi", "Austrália", 28, 1.93, 81.6 , 13, 0, 2);
         
         $l[4] = new Lutador("Melquisedeque", "Portugal", 37, 1.70 , 119.3, 5, 4, 3);
         
         $l[5] = new Lutador("Adonias", "Japão", 30, 1.81, 105.7 , 12, 2, 4);
         
         $UEC01 = new Luta();
         $UEC01->marcarLuta($l[4], $l[5]);
         $UEC01->lutar();
        
         
        
         
        
        ?>
        </pre>
    </body>
</html>
