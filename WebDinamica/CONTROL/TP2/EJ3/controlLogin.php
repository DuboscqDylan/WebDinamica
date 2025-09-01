<?php

class controlLogin
{

    private $users;

    function __construct()
    {
        $this->users = [
            ["username" => "pablo67", "password" => "micontra123"],
            ["username" => "miUsuario", "password" => "unaContrasenia343"],
            ["username" => "juanaDA", "password" => "passw0rdfuert3"],
            ["username" => "mariaBarrios", "password" => "111maria111"]
        ];
    }

    function getUsers()
    {
        return $this->users;
    }

    public function validarUsuario($userPassword)
    {
        $usersCargados = $this->getUsers();
        $i = 0;
        $encontrado = false;

        do {
            $usuario = $usersCargados[$i];
            if ($usuario["username"] === $userPassword["username"] && $usuario["password"] === $userPassword["password"]) {
                $encontrado = true;
            } else {
                if ($usuario["username"] === $userPassword["username"]) {
                    $resultado = "La contraseña es incorrecta.";
                }
                $i++;
            }
        } while ($i < count($usersCargados) && !$encontrado);
        if ($encontrado) {
            $resultado = "Bienvenido " . $userPassword["username"] . "!";
        } else {
            if ($resultado != "La contraseña es incorrecta.") {
                $resultado = "El usuario no existe";
            }
        }
        return $resultado;
    }
}
