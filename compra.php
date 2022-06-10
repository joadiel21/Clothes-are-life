<html>
    <head>
        <title>Cálculo del pago a de la ropa</title>
    </head>
    <body>
    <?php
        $r1 = $_REQUEST['r1'];
        $r2 = $_REQUEST['r2'];
        $r3 = $_REQUEST['r3'];
        $r4 = $_REQUEST['r4'];
        $r5 = $_REQUEST['r5'];
        $r6 = $_REQUEST['r6'];
        $r7 = $_REQUEST['r7'];
        $r8 = $_REQUEST['r8'];
        $r9 = $_REQUEST['r9'];
        $r10 = $_REQUEST['r10'];
        $r11 = $_REQUEST['r11'];
        $r12 = $_REQUEST['r12'];
        $r13 = $_REQUEST['r13'];

        
        if ($r1 > 0)
        {
        $pago1 = $r1 * 15.50;
        echo "Ha comprado ".$r1." camisa/s, su total de la compra es de  ".$pago1." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada  ";
        }
        echo "<br>" ;
        echo "<br>" ;

    
        if ($r2 > 0)
        {
            $pago2 = $r2 * 13.80;
            echo "Ha comprado ".$r2." camisa/s, su total de la compra es de ".$pago2." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r3 > 0)
        {
            $pago3 = $r3 * 20.0;
            echo "Ha comprado ".$r3." camisa/es, su total de la compra es de ".$pago3." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r4 > 0)
        {
            $pago4 = $r4 * 17.20;
            echo "Ha comprado ".$r4." camisa/s, su total de la compra es de ".$pago4." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r5> 0)
        {
            $pago5 = $r5 * 22.90;
            echo "Ha comprado ".$r5." camisa/s, su total de la compra es de".$pago5." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r6 > 0)
        {
            $pago6 = $r6 * 30.20;
            echo "Ha comprado ".$r6." camisa/s, su total de la compra es de".$pago6." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r7 > 0)
        {
            $pago7 = $r7 * 12.40;
            echo "Ha comprado ".$r7." camisa/s, su total de la compra es de ".$pago7." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r8 > 0)
        {
            $pago8 = $r8 * 19.40;
            echo "Ha comprado ".$r8." camisa/s, su total de la compra es de ".$pago8." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r9 > 0)
        {
            $pago9 = $r9 * 25.45;
            echo "Ha comprado ".$r9." camisa/s, su total de la compra es de".$pago9." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r10> 0)
        {
            $pago10 = $r10 * 27.85;
            echo "Ha comprado ".$r10." camisa/s, su total de la compra es de ".$pago10." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r11 > 0)
        {
            $pago11 = $r11 * 14.75;
            echo "Ha comprado ".$r11." camisas/es, su total de la compra es de ".$pago11." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;

        
        if ($r12 > 0)
        {
            $pago12 = $r12 * 20.89;
            echo "Ha comprado ".$r12." camisa/s, su total de la compra es de ".$pago12." $";
        }
        else 
        {
            echo "Ha ingresado valores incorrectos o no ha comprado nada";
        }
        echo "<br>";
        echo "<br>" ;


    ?>
    </body>
</html>