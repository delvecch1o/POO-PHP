<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'AcoesVideo.php';
        require_once 'Video.php';
        require_once 'Pessoa.php';
        require_once 'JovemAprendiz.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video ("Aula 15 de HTML5");
        
        print_r($v);
        
        $j[0] = new JovemAprendiz("Rian", 15 , "M", "xaulin");
        print_r($j[0]);
        
        $j[1] = new JovemAprendiz("Simara", 18 , "F", "suave");
        print_r($j[1]);
        
        
        ?>
        </pre>
    </body>
</html>
