<?php
ini_set('display_erros',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//flata terminar que imprima ticket y se vea tuneado con boostrap bla bla.
class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;
    public function __construct() { 
        $this->descuento = 0.0;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }
    public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Dni: " . $this->dni . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Telefono: " . $this->telefono . "<br>";
        echo "Descuento: " . $this->descuento  . "<br>";
    }
   
}
class Producto{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;
    public function __construct(){
        $this->precio=0.0;
        $this->iva=0.0;
        
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }
    public function imprimir(){
       echo "Codigo:" . $this->cod . "<br>";
       echo "Nombre: " . $this->nombre . "<br>";
       echo "Precio: " . $this->precio . "<br>";
       echo "Descripción: " . $this->descripcion . "<br>";
       echo "Iva: " . $this->iva . "<br>";
   }
    
}
class Carrito{
    private $cliente;
    private $aProductos= array();
    private $subtotal;
    private $total;

    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }
    public function cargarProducto($producto){
            $this->aProductos[]=$producto;
    }
    
    public function imprimirTicket(){
        echo "Fecha " . "<td> <tr>";
        echo "DNI " . $this->cliente->dni . "<td><tr>";
    }
}
//programa
$cliente1 = new Cliente();
$cliente1->dni="34765456";
$cliente1->nombre="Bernabé";
$cliente1->correo="bernabe@gmail.com";
$cliente1->telefono="+5411885598686";
$cliente1->descuento=0.05;
print_r($cliente1);

$producto1=new Producto();
$producto1->cod= "AB8767";
$producto1->nombre="Notebook 15\"HP";
$producto1->precio=30800;
$producto1->iva=21;
$producto1->imprimir();

$producto2=new Producto();
$producto2->cod="QWR579";
$producto2->nombre="Heladera Whirlpool";
$producto2->descripcion="Esta es una heladera no froze";
$producto2->precio=76000;
$producto2->iva=10.5;
$producto2->imprimir();

$carrito = new Carrito();
$carrito->cliente=$cliente1;

$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);

$carrito->imprimirTicket();//imprime el ticket de la compra
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Market</title>
</head>
<?php 
exit;
?>
<body>
    <main>
        <?php $carrito->imprimir(); //imprimme el ticket de la compra ?>
    </main>
</body>
</html>