<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
<h1>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $c = new Cachorro();
        $l = new Lobo();
        $m = new Mamifero();
        
       // $c->emitirSom();
       // $l->emitirSom();
       // $m->emitirSom();
        
        $c->reagirFrase("Olá"); // abanar e latir
        $c->reagirFrase("Vai Apanhar"); // rosnar 
        
        $c->reagirHora(11,45); // abanar 
        $c->reagirHora(21,00); // ignorar
        
        $c->reagirDono(true); // abanar
        $c->reagirDono(false); // rosnar e latir
        
        $c->reagirIdadePeso(2,12.5); //latir
        $c->reagirIdadePeso(17, 4.5); //rosnar
        
                
        
        
        ?>
    </h1>
    </body>
        </pre>
</html>
