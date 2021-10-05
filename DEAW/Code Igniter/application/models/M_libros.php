<?php

class M_libros extends CI_Model{

    
    public function cuantosLIbros(){
//        $db = $this->load->database();
        $rs = $this->db->query("select count(*) as cuantos from libros");
        $fila = $rs->row_array();
        return $fila['cuantos'];
    } 
    
    public function libros(){
        $sql = "select idlibro, titulo from libros";
        $rs = $this->db->query($sql);
        return $rs->result(); //Devuelve array de objetos libro
    }
    
    public function datosLibro($idLibro){
        $sql = "select idlibro, titulo, paginas, genero, nombre as autor from autores, libros"
                . " where autores.idautor=libros.idautor and idlibro=$idLibro";
        
        $rs = $this->db->query($sql);
        return $rs->row();
    }
    
    public function prestamos($idLibro){
        $sql = "select prestamos.fecha from prestamos"
                . " where idlibro=$idLibro";
        
        $rs = $this->db->query($sql);
        return $rs->result();
    }
}

