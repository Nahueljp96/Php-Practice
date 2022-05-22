<?php
ini_set('display_erros',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$aNotas=array (9,8,9.50,4,7,8);
$aPacientes=array();
$aPacientes[]=array(
    "dni"=> "33.765.012",
    "nombre"=>"Ana Acuña",
    "edad"=>45,
    "peso"=>81.50,
);
$aApacientes[]=array(
    "dni"=> "23.684.385",
    "nombre"=>"Gonzalo Bustamante",
    "edad"=>66,
    "peso"=>79,
);
$aApacientes[]=array(
    "dni"=> "22.684.384",
    "nombre"=>"Pepe Argento",
    "edad"=>56,
    "peso"=>89,
);
$aApacientes[]=array(
    "dni"=> "26.684.485",
    "nombre"=>"Lalo Cardozo",
    "edad"=>96,
    "peso"=>59,
);
$aApacientes[]=array(
    "dni"=> "46.384.585",
    "nombre"=>"Juanito Lingo",
    "edad"=>26,
    "peso"=>69,
);
$aEmpleados=array();
$aEmpleados[]= array("dni"=>33300123, "nombre"=>"David Garcia", "bruto"=>8500.30);
$aEmpleados[]= array("dni"=>40312321, "nombre"=>"Ana del Valle","bruto"=>9000);
function contar($aArray){
    $cont=0;
    foreach($aArray as $i){
        $cont++; //es igual que "$cont=$cont+1;"
    }
 return $cont;   

}
echo "cantidad de notas ".contar($aNotas)."<br>";
echo "cantidad de Pacientes " .contar($aApacientes)."<br>";
echo "cantidad de Empleados " .contar($aEmpleados);
