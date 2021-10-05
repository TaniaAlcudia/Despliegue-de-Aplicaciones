<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenida extends CI_Controller {

	public function index()
	{
            echo "Bienvenido";
            //$this->load->view('welcome_message');
	}
        
        public function verHora(){
            echo date('d/M/Y');
        }
        
        public function sumar($num, $num2){
            echo $num+$num2;
        }
}
