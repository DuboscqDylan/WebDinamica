<?php
require_once "BaseDatos.php";

class Auto
{

    private $Patente;
    private $Marca;
    private $Modelo;
    private $DniDuenio;
    private $Indice;

    public function __construct() {}

    public function getPatente()
    {
        return $this->Patente;
    }
    public function getMarca()
    {
        return $this->Marca;
    }
    public function getModelo()
    {
        return $this->Modelo;
    }
    public function getDniDuenio()
    {
        return $this->DniDuenio;
    }
    public function getIndice()
    {
        return $this->Indice;
    }

    public function setPatente($patente)
    {
        $this->Patente = $patente;
    }
    public function setMarca($marca)
    {
        $this->Marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->Modelo = $modelo;
    }
    public function setDniDuenio($dniDuenio)
    {
        $this->DniDuenio = $dniDuenio;
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
            $sql = "INSERT INTO auto(Patente,Marca,Modelo,DniDuenio) VALUES ('{$this->getPatente()}',
                    '{$this->getMarca()}','{$this->getModelo()}','{$this->getDniDuenio()}')";
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
            $sql = "UPDATE auto SET Marca='{$this->getMarca()}', Modelo='{$this->getModelo()}',
                DniDuenio='{$this->getDniDuenio()}'
                WHERE Patente='{$this->getPatente()}'";
            $respuesta = $database->Ejecutar($sql) > -1;
        }
        return $respuesta;
    }

    public function eliminar()
    {
        $database = new BaseDatos();
        $respuesta = false;

        if ($database->Iniciar()) {
            $sql = "DELEFE FROM auto WHERE Patente = '{$this->getPatente()}'";
            $respuesta = $database->Ejecutar($sql) > -1;
        }
        return $respuesta;
    }

    public function buscar($patente)
    {
        $database = new BaseDatos();
        $respuesta = false;
        if ($database->Iniciar()) {
            $sql = "SELECT * FROM auto WHERE Patente='{$patente}'";
            if ($database->Ejecutar($sql) > 0) {
                $row = $database->Registro();
                if ($row) {
                    $this->setPatente($row['Patente']);
                    $this->setMarca($row['Marca']);
                    $this->setModelo($row['Modelo']);
                    $this->setDniDuenio($row['DniDuenio']);
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
            $sql = "SELECT * FROM auto";
            if ($condicion != "") {
                $sql .= " WHERE " . $condicion;
            }

            if ($base->Ejecutar($sql) > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Auto();
                    $obj->setPatente($row['Patente']);
                    $obj->setMarca($row['Marca']);
                    $obj->setModelo($row['Modelo']);
                    $obj->setDniDuenio($row['DniDuenio']);
                    $arreglo[] = $obj;
                }
            }
        }
        return $arreglo;
    }
}
