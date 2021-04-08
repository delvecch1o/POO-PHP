<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
       require_once 'Visitante.php';
       // $p1 = new Pessoa();
        /*
        $v1 = new Visitante();
        $v1->setNome("Adonias");
        $v1->setIdade(27);
        $v1->setSexo("M");
        print_r($v1);
        */
       require_once 'Aluno.php';
       $a1 = new Aluno();
       $a1->setNome("Mauricio");
       $a1->setMatricula(123456);
       $a1->setIdade(15);
       $a1->setSexo("M");
       $a1->setCurso("Informática");
       $a1->pagarMensalidade();
       print_r($a1);
       
       require_once 'Bolsista.php';
       $b1 = new Bolsista();
       $b1->setNome("Rodrigo");
       $b1->setIdade(37);
       $b1->setSexo("M");
       $b1->setMatricula(23888);
       $b1->setBolsa("100%");
       $b1->setCurso("ADS");
       $b1->pagarMensalidade();
       print_r($b1);
       
       
       
        ?>
        </pre>
    </body>
</html>
