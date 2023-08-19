<?php
class Usuarios extends Controller
{
    public function index()
    {
        // Crear una instancia del modelo y asignarla a la propiedad 'model'
        $this->model = new UsuariosModel(); // Reemplaza 'ModeloUsuario' con el nombre de tu modelo

        // Ahora puedes llamar al método 'getUsuario()' en la instancia del modelo
        print_r($this->model->getUsuario());
    }
}
