<?php
require_once (dirname(__DIR__) . "../MODELO/Auto.php");

class ControlAuto{

    public function insertar($datos){
        $auto = new Auto();
        $auto->setPatente($datos['Patente']);
        $auto->setMarca($datos['Marca']);
        $auto->setModelo($datos['Modelo']);
        $auto->setDniDuenio($datos['DniDuenio']);

        if($auto->insertar()){
            return ["exito" => true, "indice" => $auto->getIndice()];
        }else{
            return ["exito" => false, "error" => "No se pudo insertar"];
        }
    }

    public function modificar($datos){
        $auto = new Auto();
        if($auto->buscar($datos['Patente'])){
            $auto->setMarca($datos['Marca']);
            $auto->setModelo($datos['Modelo']);
            $auto->setDniDuenio($datos['DniDuenio']);
            if($auto->modificar()){
                return ["exito" => true];
            }
        }
        return ["exito" => false, "error" => "No se pudo modificar"];
    }
    
    public function cambiarDuenio($patente, $dniNuevo) {
    $auto = new Auto();
    if ($auto->buscar($patente)) {
        $datos = [
            'Patente'   => $auto->getPatente(),
            'Marca'     => $auto->getMarca(),
            'Modelo'    => $auto->getModelo(),
            'DniDuenio' => $dniNuevo
        ];
        return $this->modificar($datos);
    }
    return ["exito" => false, "error" => "No se encontró el auto"];
}

    public function eliminar($Patente){
        $auto = new Auto();
        if($auto->buscar($Patente)){
            if($auto->eliminar()){
                return ["exito" => true];
            }else{}
        }
        return ["exito" => false, "error" => "No se pudo eliminar"];
    }

    public function buscar($Patente){
        $auto = new Auto();
        if($auto->buscar($Patente)){
            return ["exito" => true, "auto" => $auto];
        }else{
        return ["exito" => false, "error" => "El auto no fue encontrado"];
        }
    }

    public function listar($condicion=""){
        $lista = Auto::listar($condicion);
        return $lista;
    }

}
?>