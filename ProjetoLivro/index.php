<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] = new Pessoa("Joao", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "F");
        
        $l[0] = new Livro("PHP Básico", "José da Silva", 300 , $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de Paula", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Souza Naves", 800, $p[1]);
        
        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->avancarPag();
        $l[0]->detalhes();
        
       
        $l[1]->abrir();
        $l[1]->folhear(50);
        $l[1]->voltarPag();
        $l[1]->detalhes();
         
        $l[2]->detalhes();
        
        
        
        
        
        
        ?>
        </pre>
    </body>
</html>
