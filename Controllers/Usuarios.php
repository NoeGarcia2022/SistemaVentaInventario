<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        // Crear una instancia del modelo y asignarla a la propiedad 'model'
        $this->model = new UsuariosModel(); // Reemplaza 'ModeloUsuario' con el nombre de tu modelo

        // Ahora puedes llamar al método 'getUsuario()' en la instancia del modelo
        $this->views->getView($this, "index");
    }

    // metodo para validar los campos del login 
    public function validar()
    {

        $this->model = new UsuariosModel();

        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $smg = "Los campos estan vacios";
        } else {
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $data = $this->model->getUsuario($usuario, $clave);
            if ($data) {
                $_SESSION['id_usuario'] = $data['id'];
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $smg = "ok";
            } else {
                $smg = "Usuario o Contraseña incorrecta";
            }
        }
        echo json_encode($smg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
