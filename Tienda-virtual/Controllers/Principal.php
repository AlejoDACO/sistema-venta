<?php
class Principal extends Controller

 {
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $this->views->getView('home', "index", $data);
    }
    //Vista About
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }
    //Vista Shop
    public function shop()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "shop", $data);
    }
   //Vista Detail
   public function detail($id_producto)
   {
       $data['title'] = 'No';
       $this->views->getView('principal', "detail", $data);
   }
     //Vista Contact
   public function Contact()
   {
       $data['title'] = 'Contactos';
       $this->views->getView('principal', "contact", $data);
   }
}
