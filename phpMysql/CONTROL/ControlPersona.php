<?php
require_once (dirname(__DIR__) . "../MODELO/Persona.php");

class ControlPersona{

    public function insertar($datos){
        $persona = new Persona();
        $persona->setNroDni($datos['NroDni']);
        $persona->setApellido($datos['Apellido']);
        $persona->setNombre($datos['Nombre']);
        $persona->setFechaNac($datos['fechaNac']);
        $persona->setTelefono($datos['Telefono']);
        $persona->setDomicilio($datos['Domicilio']);

        if($persona->insertar()){
            return ["exito" => true, "indice"=>$persona->getIndice()];
        }else{
            return ["exito" => false, "error"=>"No se pudo insertar"];
        }
    }

    public function modificar($datos){
        $persona = new Persona();
        if($persona->buscar($datos['NroDni'])){
            $persona->setNroDni($datos['NroDni']);
            $persona->setApellido($datos['Apellido']);
            $persona->setNombre($datos['Nombre']);
            $persona->setTelefono($datos['Telefono']);
            $persona->setDomicilio($datos['Domicilio']);
            if($persona->modificar()){
               return ["exito"=>true];
            }
        }
        return ["exito"=>false, "error"=>"No se pudo modificar"];
    }

    public function eliminar($NroDni){
        $persona = new Persona();
        if($persona->buscar($NroDni)){
            if($persona->eliminar()){
                return ["exito" => true];
            }else{}
        }
        return ["exito"=>false, "error"=>"No se pudo eliminar"];
    }

    public function buscar($NroDni){
        $persona = new Persona();
        if($persona->buscar($NroDni)){
            return ["exito" => true, "persona"=>$persona];
        }
        return ["exito" => false, "error" => "No se encontró la persona"];
    }

    public function listar($condicion=""){
        $lista = Persona::listar($condicion);
        return $lista;
    }

}
?>