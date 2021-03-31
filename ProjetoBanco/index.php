<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco(); // Mariluz
            $p2 = new ContaBanco(); // Josias
            $p1->abrirConta("CC");
            $p1->setDono("Mariluz");
            $p1->setNumConta(123456789);
           
            $p2->abrirConta("CP");
            $p2->setDono("Josias");
            $p2->setNumConta(987654321);
            
            $p1->depositar(300);
            $p2->depositar(500);
                    
            $p2->sacar(100);
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            $p1->sacar(338);
            $p2->sacar(530);
            
            $p1->fecharConta();
            $p1->fecharConta();
            
            
            print_r($p1);
            print_r($p2);
           
        ?>
       
    </body>
</pre>
</html>
