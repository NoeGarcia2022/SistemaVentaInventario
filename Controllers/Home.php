<?php
class Home extends Controller
{
    public function index()
    {
        $views = 'views';
        $this->$views->getView($this, "index");
    }
}
