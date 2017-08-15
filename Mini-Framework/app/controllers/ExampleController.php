<?php
class ExampleController
{
	public function index()
	{
      $page = 'index';
      $title = 'Index View';
      view('index', compact('page','title'));
	}

    public function about()
    {
      $page = 'about';
      $title = 'About View';
      view('about'compact('page','title'));
    }
    
    public function contact()
    {
      $page = 'contact';
      $title = 'Contact View';
       view('contact'compact('page','title'));
    }

    

}



