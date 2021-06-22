<?php 

include("conexion.php");
$doc=$_POST["lsttdoc"];
$cod=$_POST["txtcod"];
$nac=$_POST["lstnacionalidad"];
$ap=$_POST["txtap"];
$am=$_POST["txtam"];
$n=$_POST["txtn"];
$c=$_POST["txtc"];
$feche=$_POST["feche"];


$ruc=$_POST["txtruc"];

$nome=$_POST["txtnomemp"];

$rubro=$_POST["lstrubro"];

$cargo=$_POST["txtcargo"];



$sqlpersonales="insert into datosp(codusuario,tipodocumento,apaterno,amaterno,nombre,celular,fechemision,nacionalidad) 
values('$cod','$doc','$ap',$am,'$n','$c','$feche',$nac)";

$sqlempresa="insert into datose(codusuario,ruc,nombreemp,rubro,cargo) 
values('$cod','$ruc','$nome',$rubro,'$cargo')";


mysql_query($sqlpersonales,$cn);

mysql_query($sqlempresa,$cn);


mysql_close($cn);

header('location: index.php');


 ?>