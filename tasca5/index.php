<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$edad = 40;
echo $edad;
echo "<br>";

$temperatura = 30.5;
echo $temperatura;
echo "<br>";

$nombre = "Maria";
echo $nombre;
echo "<br>";

$verdad= true;
echo $verdad;
echo "<br>";

$apellido ="Rodriguez";
echo $apellido;
echo "<br>";
       

echo strlen($nombre);
echo "<br>";

echo strlen($apellido);
echo "<br>";

echo strrev($nombre);
echo "<br>";

echo strrev($apellido);
echo "<br>";

$concatenado=$nombre.$apellido;
echo $concatenado;
echo "<br>";

define ("nombre", "Yolanda");
echo nombre;
echo "<br>";

$numbers =[20, 3, 50, 99, 55];
print_r ($numbers);
echo "<br>";

$numbers2 =[20, 3, 50,];
print_r ($numbers2);
echo "<br>";

array_push($numbers2,29);
print_r($numbers2);
echo "<br>";

$merge = array_merge($numbers,$numbers2);

print_r($merge);
echo "<br>";

echo count($merge);
echo "<br>";

echo $merge[0];
echo "<br>";
echo $merge[1];
echo "<br>";
echo $merge[2];
echo "<br>";
echo $merge[3];
echo "<br>";
echo $merge[4];
echo "<br>";
echo $merge[5];
echo "<br>";
echo $merge[6];
echo "<br>";
echo $merge[7];
echo "<br>";
echo $merge[8];
echo "<br>";

$X=5;
$Y=10;
$N=2.5;
$M=6.9;
echo $X;
echo "<br>";
echo $Y;
echo "<br>";

echo ($X+$Y);
echo "<br>";

echo ($X-$Y);
echo "<br>";

echo ($X*$Y);
echo "<br>";

echo ($X*$Y);
echo "<br>";

echo ($X/$Y);
echo "<br>";

echo ($X%$Y);
echo "<br>";

echo $N;
echo "<br>";

echo $M;
echo "<br>";

echo ($N+$M);
echo "<br>";

echo ($N-$M);
echo "<br>";

echo ($N*$M);
echo "<br>";

echo ($N/$M);
echo "<br>";

echo ($N%$M)."<br>";


echo ($X*2)."<br>";
echo ($Y*2)."<br>";
echo ($N*2)."<br>";
echo ($M*2)."<br>";
echo ($X+$Y+$N+$M)."<br>";
echo ($X*$Y*$N*$M)."<br>";

function suma(){              // sumando definiendo variables globales
    global $X,$Y,$N,$M,$A,$B;
    $A=$X+$Y+$N+$M;
    
}
suma();
echo $A."<br>";

function multiplicacion(){              // multiplicando definiendo variables globales
    global $X,$Y,$N,$M,$A;
    $A=$X*$Y*$N*$M;
    
}
multiplicacion();
echo $A."<br>";



            
