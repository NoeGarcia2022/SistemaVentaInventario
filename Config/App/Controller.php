<?php
class Controller
{
    public function __construct()
    {
        $views = 'views';
        #no me deja instanciar la vista con el controlador pero si me 
        #dejo a la hora de poner una variable en este constructor 
        $this->$views = new Views();
        $this->cargarModel();
    }
    public function cargarModel()
    {
        $model = get_class($this) . "Model";
        $ruta = "Models/" . $model . ".php";
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->$model = new $model();
        }
    }
}
