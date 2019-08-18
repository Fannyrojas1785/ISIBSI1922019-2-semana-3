<?php
//texto simple
$ts =$_GET ['textosimple'];
echo "texto simple:".$ts."<br/>";

//textolargo
$tl =$_GET ['textolargo'];
echo "texto largo:".$tl."<br/>";

//campo radiales
$r =$_GET ['radial'];
echo "grupode campos radiales:". $r."<br/>";

//seleccion
$s =$_GET ['seleccion'];
echo "campo de seleccion:". $s."<br/>";

//rango
$rango =$_GET ['rango'];
echo "campo de tipo rango:". $rango."<br/>";

//casilla
$casilla =$_GET ['casilla'];
echo "casilla de verificacion:".$casilla."<br/>";

?>