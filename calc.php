<?php

//we have the area calculator that needs two integers in order to be invoked correctly
function calculateArea($numA, $numB) {

  //we see here the two parameters being used in multiplacation for calculating an area of a square/rectangle
return $numA * $numB;
}

//we see here our function invoked, using the numbers 1 and 5
echo calculateArea(1, 5);

//we have the volume calculator that needs three integers in order to be invoked correctly
function calculateVolume($newNumA, $newNumB, $newNumC) {

  //we see here the three parameters being used in multiplacation for calculating the volume of a 3D cube/box
return $newNumA * $newNumB * $newNumC;
}

echo calculateVolume(5, 10, 20);

//This program was written by Anthony Teves
