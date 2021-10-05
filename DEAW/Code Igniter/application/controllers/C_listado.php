<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_listado extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_libros'); //Crea objeto m_libros
    }

	public function index()
	{
            $this->load->view("v_cabecera");
            $this->cargarListaLibros();
            $this->load->view("v_pie");
	}
        
        public function cargarListaLibros(){
            $cantLibros = $this->m_libros->cuantosLibros();
            
            $datos['cantLibros'] = $cantLibros;
            $datos['libros'] = $this->m_libros->libros();
//            $datos['numerada'] = false;
            
            $this->load->view("v_listalibros", $datos);
        }
        
        public function verLibro($idLibro){
            
            
            $this->load->view("v_cabecera");
            $this->cargarListaLibros();
            
            $this->cargarListaLibro($idLibro);
            
            $this->load->view("v_pie");
        }
        
        public function cargarListaLibro($idLibro){
            $datos['libro'] = $this->m_libros->datosLibro($idLibro);
            $datos['fechas'] = $this->m_libros->prestamos($idLibro);
            $this->load->view('v_libro', $datos);
        }

}
