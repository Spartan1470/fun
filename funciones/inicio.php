<?php 
    /*funciones que no tienen parametros*/ 

    function Saludar(){
        echo "Hola como amaneces <br>";
        echo "Hola como amaneces <br>";
        echo "Hola como amaneces <br>";
    }

    function SaludarName($name, $estado = 'Excelente y mejorando'){
        echo "<p>Hola $name Como amaneces $estado</p>";
    }

    function CompararNros($nro1, $nro2)
    {
        if ($nro1 == $nro2) {
            echo "<p>El Numero $nro1 es IGUAL al $nro2 </p>";
        } elseif ($nro1 > $nro2) {
            echo "<p>El Numero $nro1 es mayor que $nro2 </p>";
        } else {
            echo "<p>El Numero $nro2 es mayor que $nro1 </p>";
        }

        echo "función llamada desde otra " . CompararConMensaje(45,25);
    }

    function CompararConMensaje($nro1, $nro2)
    {
        if ($nro1 == $nro2) {
            $mensaje= "<p>El Numero $nro1 es IGUAL al $nro2 </p>";
        } elseif ($nro1 > $nro2) {
            $mensaje= "<p>El Numero $nro1 es mayor que $nro2 </p>";
        } else {
            $mensaje= "<p>El Numero $nro2 es mayor que $nro1 </p>";
        }
        return $mensaje;
    }

    CompararNros(1,2)
    /*
    echo CompararConMensaje(10,5);
    $resultado = CompararConMensaje(15,5);
    CompararConMensaje(5,5);
     /*
    CompararNros(10,5);
    CompararNros(5,15);
    CompararNros(15,15);  
    Saludar();
    SaludarName('Alexander',' mas o menos');
    SaludarName('Mateo');
    SaludarName('Jhony');

    */
   
?>