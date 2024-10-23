<?php
/* CBTIS 89 
   Programa que almacena precios,iva,subtotal,descuentos y total por medio de un ciclo 
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
$arrayprecios = array(500,400,200,700,100);
$arrayIva = array();
$arraysubtotal = array();
$arraydescuentos = array();
$arraytotal= array();

$longuitud = count($arrayprecios);

  echo "Arreglo Precios <br>", "<br>";
   for($i=0; $i<$longuitud; $i++)
      {echo $arrayprecios [$i];
         echo "<br>";  }

   
      echo "Arreglo IVA <br>","<br>";
   for($i=0; $i<$longuitud; $i++)
      { $arrayIva = $arrayprecios[$i]*0.16;
         echo "<br>";}

      
             echo "Arreglo Subtotal <br>","<br>";
   for($i=0; $i<$longuitud; $i++)
      { $arraysubtotal = $arrayprecios[$i];
         echo "<br>";}

             echo "Arreglo Descuento <br>","<br>";
   for($i=0; $i<$longuitud; $i++)
      { $arraydescuentos = $arrayprecios[$i]%10;
         echo "<br>";}

             echo "Arreglo Total <br>","<br>";
   for($i=0; $i<$longuitud; $i++)
      { $arraytotal = $arrayprecios[$i];
         echo "<br>";}
         ?>