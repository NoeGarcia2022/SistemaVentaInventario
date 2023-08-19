<?php
class UsuariosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuario(string $usuario, string $clave)
    {
        $sql = "SELECT * FROM usuarios where usuario = '$usuario' and clave = '$clave'";
        $data = $this->select($sql);
        return $data;
    }
}
