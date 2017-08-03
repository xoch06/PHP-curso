<?php
class WebController
{
	public function inicio()
	{
     $usuarios = App::get('db')->selectALL('usuario');
      require __DIR__ . '/../views/inicio.view.php';
	}

    public function acerca()
    {
     require __DIR__ . '/../views/acerca.view.php';
    }
    
    public function contacto()
    {
     require __DIR__ . '/../views/contacto.view.php';
    }

    

}



