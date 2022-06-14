<?php
ini_set('display_erros',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;
    public function setNombre($nombre){ $this->nombre=$nombre;}
    public function getNombre(){ return $this->nombre;}

    public function setDni($dni){ $this->dni=$dni;}
    public function getDni(){return $this->dni;}

    public function setEdad($edad){$this->edad=$edad;}
    public function getEdad(){return $this->edad;}

    public function setNacionalidad($nacionalidad){$this->nacionalidad=$nacionalidad;}
    public function getNacionalidad(){return $this->nacionalidad;}

    public function imprimir(){

    }
    public function __destruct(){
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
}

class Alumno extends Persona{
    private $legajo;
    private $notaPorfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function __construct($dni="", $nombre="") {
       $this->dni = $dni;
       $this->nombre = $nombre; 
       $this->notaPortfolio = 0.0;
       $this->notaPhp = 0.0;
       $this->notaProyecto = 0.0; 
    }
    public function __destruct(){
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
    
    public function imprimir(){
        echo "Alumno: " . $this->nombre ."<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Nota portfolio: " . $this->notaPortfolio . "<br>";
    }
    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    public $especialidad;
    const ESPECIALIDAD_WP ="Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";
    
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function __destruct(){
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
    public function imprimir(){
        echo "Nombre del docente: " . $this->nombre . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br><br>";
    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Especialidades: <br>";
        echo self::ESPECIALIDAD_WP . "<br>";
        echo self::ESPECIALIDAD_ECO . "<br>";
        echo self::ESPECIALIDAD_BBDD . "<br>";
    }
}
//programa
$alumno1 = new Alumno();
$alumno1->setNombre("Juana Mendoza");
$alumno1->setDni("353434305");
$alumno1->setEdad(32);
$alumno1->setNacionalidad("Argentina");
echo $alumno2->getNombre();
$alumno1->notaPhp=8;
$alumno1->notaPortfolio = 9;
$alumno1->notaProyecto = 10;
$alumno1->imprimir();

$alumno2 =new Alumno();
$alumno2->nombre="Nahuel Ponce";
$alumno2->dni="4069239";
$alumno2->edad = 25;
$alumno2->nacionalidad = "Argentina";
$alumno2->notaPhp = 9;
$alumno2->notaPortfolio = 7;
$alumno2->notaProyecto = 10;
$alumno2->imprimir();

$docente = new Docente();
$docente->nombre = "Sergio Gonzalez";
$docente->especialidad = "Economía Aplicada";
$docente->especialidad = Docente::ESPECIALIDAD_ECO;
$docente->imprimir();
$docente->imprimirEspecialidadesHabilitadas();



?>