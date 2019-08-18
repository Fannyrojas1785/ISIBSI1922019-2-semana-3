<?php
//texto simple
$ts =$_POST ['textosimple'];
echo "texto simple:".$ts."<br/>";

//textolargo
$tl =$_POST ['textolargo'];
echo "texto largo:".$tl."<br/>";

//campo radiales
$r =$_POST ['radial'];
echo "grupode campos radiales:". $r."<br/>";

//seleccion
$s =$_POST ['seleccion'];
echo "campo de seleccion:". $s."<br/>";

//rango
$rango =$_POST ['rango'];
echo "campo de tipo rango:". $rango."<br/>";

//casilla
$casilla =$_POST ['casilla'];
echo "casilla de verificacion:".$casilla."<br/>";

?>