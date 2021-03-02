<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$x=5;                                //nivell 1 exercici 1
$y=1;
function resta(){              
    global $x,$y,$A;
    $A=$x-$y;
    
}
resta();
echo $A."<br>";

$edad=50;                            // nivell 1 exercici 2
if ($edad%2==0) {
    echo"la edad es par";
}
else {
    echo "la edad es impar";
}

echo "<br>";

function parell_imparell($edad){     //nivell 1 exercici 3
   
    if ($edad%2==0) {
    return"la edad es par";
}
    else 
    return"la edad es impar";
    
}
   
echo parell_imparell(49);       
echo "<br>";

$x = 1;                        // nivell 1 exercici 4
while ($x <= 10):
    echo $x;
    $x++;
endwhile;
echo "<br>";

for ($x = 1; $x < 11; $x++) {     //    nivell 2 exercici 1  
    if ($x % 2 == 0) {
    echo $x;
    echo "<br>";
    }
}


function limit($limit){
  for ($x = 1; $x < $limit; $x++) {     //    nivell 2 exercici 2 
    if ($x % 2 == 0) {
    echo $x;
    echo "<br>";
    }  
}
}
limit(50);

for ($x=1960; $x<=2016;$x++){      //  nivell 3 exercici 1
    if ($x%4==0){
    echo $x;
    echo "<br>";
    }
    
}




function subtotal($nxocolata,$ncarmels,$nxiclets){   //nivell 3 exercici 2
    $xocolata=1;
    $xiclets=0.50;
    $carmels=1.50;
    
    $subxoco=$xocolata*$nxocolata;
    $subxi=$xiclets*$nxiclets;
    $subca=$carmels*$ncarmels;
    $subtot=$subxoco+$subxi+$subca;
    echo $subtot;
    echo "<br>";
   
}
subtotal(2,1,1); 
echo "<br>";


$limit=20;                          // nviell  3 exercici 3
for($i=2;$i<$limit;$i++)
{
  $numeros[$i]=true;
}


$numeros[2]=true;


for ($n=2;$n<$limit;$n++)
{
 
  if ($numeros[$n])
  {
    for ($i=$n*$n;$i<$limit;$i+=$n)
    {
       $numeros[$i] = false;
    }
  }
}

echo "Primos: ";
for ($n = 2; $n < $limit; $n++)
{
  if ($numeros[$n])
  {
    echo $n." ";
  }
}


?>