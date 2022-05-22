<?php
ini_set('display_erros',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$aNotas=array(8,5,7,9,10);
$msg="Este es un mensaje";


function print_f($variable){
    if(is_array($variable)){
        $contenido="";
        //si es un array, lo recorro y guardo el contenido
        foreach($variable as $item){
          $contenido.=$item;      
        }
        file_put_contents ("datos.txt", $contenido);

    }else {
        //entonces es string, guardo el contenido en el archivo "datos.txt" file_put_contents("datos.txt",$variable);
        file_put_contents("datos.txt",$variable); 
    }
    echo "Archivo actualizado.";
}


//uso
$aNotas=array(8,5,7,9,10);
$msg="Este es un mensaje";
print_f($aNotas);
?>
