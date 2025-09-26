<?php
require_once "BaseDatos.php";

class Persona
{

    private $NroDni;
    private $Apellido;
    private $Nombre;
    private $fechaNac;
    private $Telefono;
    private $Domicilio;
    private $Indice;

    public function __construct() {}

    public function getNroDni()
    {
        return $this->NroDni;
    }
    public function getApellido()
    {
        return $this->Apellido;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }
    public function getfechaNac()
    {
        return $this->fechaNac;
    }
    public function getTelefono()
    {
        return $this->Telefono;
    }
    public function getDomicilio()
    {
        return $this->Domicilio;
    }
    public function getIndice()
    {
        return $this->Indice;
    }

    public function setNroDni($nroDni)
    {
        $this->NroDni = $nroDni;
    }
    public function setApellido($apellido)
    {
        $this->Apellido = $apellido;
    }
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }
    public function setTelefono($telefono)
    {
        $this->Telefono = $telefono;
    }
    public function setDomicilio($domicilio)
    {
        $this->Domicilio = $domicilio;
    }
    public function setIndice($indice)
    {
        $this->Indice = $indice;
    }

    public function insertar()
    {
        $database = new BaseDatos();
        $respuesta = false;

        if ($database->Iniciar()) {
            $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES ('{$this->getNroDni()}',
                    '{$this->getApellido()}','{$this->getNombre()}','{$this->getFechaNac()}','{$this->getTelefono()}','{$this->getDomicilio()}')";
          if ($indice = $database->Ejecutar($sql)) {
                $this->setIndice($indice);
                $respuesta = true;
            } else {
                $this->setIndice(-1);
            }
        }
        return $respuesta;
    }

    public function modificar()
    {
        $database = new BaseDatos();
        $respuesta = false;

        if ($database->Iniciar()) {
            $sql = "UPDATE persona SET Apellido='{$this->getApellido()}', Nombre='{$this->getNombre()}', fechaNac='{$this->getFechaNac()}',
                Telefono='{$this->getTelefono()}', Domicilio='{$this->getDomicilio()}'
                WHERE NroDni='{$this->getNroDni()}'";
            $respuesta = $database->Ejecutar($sql) > -1;
        }
        return $respuesta;
    }

    public function eliminar()
    {
        $database = new BaseDatos();
        $respuesta = false;

        if ($database->Iniciar()) {
            $sql = "DELEFE FROM persona WHERE NroDni = '{$this->getNroDni()}'";
            $respuesta = $database->Ejecutar($sql) > -1;
        }
        return $respuesta;
    }

    public function buscar($NroDni)
    {
        $database = new BaseDatos();
        $respuesta = false;

        if ($database->Iniciar()) {
            $sql = "SELECT * FROM persona WHERE NroDni='{$NroDni}'";
            if ($database->Ejecutar($sql) > 0) {
                $row = $database->Registro();
                if ($row) {
                    $this->setNroDni($row['NroDni']);
                    $this->setApellido($row['Apellido']);
                    $this->setNombre($row['Nombre']);
                    $this->setFechaNac($row['fechaNac']);
                    $this->setTelefono($row['Telefono']);
                    $this->setDomicilio($row['Domicilio']);
                    $respuesta = true;
                }
            }
        }
        return $respuesta;
    }

    public static function listar($condicion = "")
    {
        $arreglo = [];
        $base = new BaseDatos();

        if ($base->Iniciar()) {
            $sql = "SELECT * FROM persona";
            if ($condicion != "") {
                $sql .= " WHERE " . $condicion;
            }

            if ($base->Ejecutar($sql) > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Persona();
                    $obj->setNroDni($row['NroDni']);
                    $obj->setApellido($row['Apellido']);
                    $obj->setNombre($row['Nombre']);
                    $obj->setFechaNac($row['fechaNac']);
                    $obj->setTelefono($row['Telefono']);
                    $obj->setDomicilio($row['Domicilio']);
                    $arreglo[] = $obj;
                }
            }
        }
        return $arreglo;
    }
}
