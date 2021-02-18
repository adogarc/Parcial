<?php


if(isset($_POST['submit']))
{
    $cantidad=$_POST['dinero'];
    $monedaOriginal=$_POST['monedaO'];
    $monedaConvertida=$_POST['monedaC'];
    //conversiones de x moneda a dolar
    $dolar_euro=1.21;
    $dolar_yen=0.0094;
    $dolar_libra=1.39;
    //conversiones de x moneda a euro
    $euro_dolar=0.83;
    $euro_yen=0.0078;
    $euro_libra=1.15;
    //conversiones de x moneda a yen
    $yen_dolar=105.95;
    $yen_euro=128.06;
    $yen_libra=147.08;
    //Conversiones de x moneda a libra
    $libra_dolar=0.72;
    $libra_euro=0.87;
    $libra_yen=0.0068;

        if($cantidad >= 0.1 )
        {
            //Conversiones de Dolar a x moneda
            if($monedaOriginal == 'Dolar' && $monedaConvertida == 'Euro')
            {
                $resultado=$cantidad*$euro_dolar;
                
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Dolar' && $monedaConvertida == 'Yen')
            {
                $resultado=$cantidad*$yen_dolar;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Dolar' && $monedaConvertida == 'Libra')
            {
                $resultado=$cantidad*$libra_dolar;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Dolar' && $monedaConvertida == 'Dolar')
            {
                echo "<p>Usted ha seleccionado convertir $monedaOriginal a $monedaOriginal su resultado seria $cantidad $monedaOriginal,s</p>";

            }

            //Conversiones de Euro a x moneda

            elseif($monedaOriginal == 'Euro' && $monedaConvertida == 'Dolar')
            {
                $resultado=$cantidad*$dolar_euro;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Euro' && $monedaConvertida == 'Yen')
            {
                $resultado=$cantidad*$yen_euro;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Euro' && $monedaConvertida == 'Libra')
            {
                $resultado=$cantidad*$libra_euro;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Euro' && $monedaConvertida == 'Euro')
            {
                echo "<p>Usted ha seleccionado convertir $monedaOriginal a $monedaOriginal su resultado seria $cantidad $monedaOriginal,s</p>";

            }
            //Conversiones de Yen a x moneda
            elseif($monedaOriginal == 'Yen' && $monedaConvertida == 'Dolar')
            {
                $resultado=$cantidad*$dolar_yen;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Yen' && $monedaConvertida == 'Euro')
            {
                $resultado=$cantidad*$euro_yen;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Yen' && $monedaConvertida == 'Libra')
            {
                $resultado=$cantidad*$libra_yen;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Yen' && $monedaConvertida == 'Yen')
            {
                echo "<p>Usted ha seleccionado convertir $monedaOriginal a $monedaOriginal su resultado seria $cantidad $monedaOriginal,s</p>";
            }

            //Conversiones de Libra a x moneda
            elseif($monedaOriginal == 'Libra' && $monedaConvertida == 'Dolar')
            {
                $resultado=$cantidad*$dolar_libra;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Libra' && $monedaConvertida == 'Euro')
            {
                $resultado=$cantidad*$euro_libra;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Libra' && $monedaConvertida == 'Yen')
            {
                $resultado=$cantidad*$yen_libra;
                echo "<p>Usted Ingreso: $cantidad $monedaOriginal y quiere convertir a $monedaConvertida usted obtendra $resultado $monedaConvertida</p>";
            }
            elseif($monedaOriginal == 'Libra' && $monedaConvertida == 'Libra')
            {
                echo "<p>Usted ha seleccionado convertir $monedaOriginal a $monedaOriginal su resultado seria $cantidad $monedaOriginal,s</p>";
            }
        }
        else{
            echo "<p>No se puede ingresar cantidades negativas o cero</p>";
        }
}

?>