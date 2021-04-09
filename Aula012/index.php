<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'GoldFish.php';
        require_once 'Arara.php';
        
        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $p = new Peixe();
        $can = new Canguru();
        $ca = new Cachorro();
        $co = new Cobra();
        $tar = new Tartaruga();
        $gol = new GoldFish();
        $ara = new Arara();
        
        
        
        $m->setPeso(55.9);
        $m->locomover();
        $a->locomover();
        $r->locomover();
        $can->locomover();
        $tar->locomover();
        $ca->locomover();
        
        $m->emitirSom();
        $ca->emitirSom();
        ?>
</pre>
    </body>
</html>
