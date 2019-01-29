<?php
/**
 * Modelo Competicion,
 * Tiene las funciones relacionadas con la base de datos
 * para manejar una competicion
 * @author Usuario
 *
 */
class Juegaequipo extends MY_Model {
    /** Propiedades basicas de la base de datos */
    public $competicion_id;
    public $partida_id;
    public $equipoinscrito_id;
    public $presentado;
    public $puntuacion;
    public $conforme;
    
    public function __construct(){
        $this->competicion_id = 0;
        $this->partida_id = 0;
        $this->equipoinscrito_id = 0;
        $this->presentado = 0;
        $this->puntuacion = 0;
        $this->conforme = "sincontestar";
    }
    public function cargar($datosDB){
        $datosDB = object_to_array($datosDB);
        $this->competicion_id = $datosDB['competicion_id'];
        $this->partida_id = $datosDB['partida_id'];
        $this->equipoinscrito_id = $datosDB['equipoinscrito_id'];
        $this->presentado = $datosDB['presentado'];
        $this->puntuacion = $datosDB['puntuacion'];
        $this->conforme = $datosDB['conforme'];
        
        return $this;
    }
    /**
     * devuelve todas o bien filtra por id
     * datos
     * @return
     */
    public function get($competicion_id= null,$partida_id = null, $equipoinscrito_id = null){
        if($competicion_id!=null && $partida_id !=null && $equipoinscrito_id != null){
            // Devolver solo uno
            $query = $this->db->get_where('juegaequipo',array("competicion_id" =>$competicion_id, "partida_id"=>$partida_id,"equipoinscrito_id"=>$equipoinscrito_id));
            $this->cargar($query->result()[0]);
            return $this;
            
        }else{
            // Devolver array
            $v_competiciones = array();
            $where = array();
            if($competicion_id){
                $where["competicion_id"] = $competicion_id;
            }
            if($partida_id){
                $where["partida_id"] = $partida_id;
            }
            if($equipoinscrito_id){
                $where["equipoinscrito_id"] = $equipoinscrito_id;
            }
            $query = $this->db->get_where('juegaequipo',$where);
            foreach($query->result() as $compeDB){
                $com = new Juegaequipo();
                $v_competiciones[] = $com->cargar($compeDB);
            }
            return $v_competiciones;
        }
        
    }
    
    
    /**
     * Inserta una competicion en la base de datos del contenido proviniento del post
     */
    public function guardarDB(){
        
        //Si ya tenia un id asignado actualizamos         
        $this->db->replace('juegaequipo', $this,array("competicion_id" =>$this->competicion_id, "partida_id"=>$this->partida_id,"equipoinscrito_id"=>$this->equipoinscrito_id));
       return $this;
    }
    public function borrarEquiposPartida(){
        // delete user from users table should be placed after remove from group
        $this->db->delete('juegaequipo',array("competicion_id" =>$this->competicion_id, "partida_id"=>$this->partida_id));
        return $this;
    }
    
    public function borrarDB(){
        // delete user from users table should be placed after remove from group
        $this->db->delete('juegaequipo',array("competicion_id" =>$this->competicion_id, "partida_id"=>$this->partida_id,"equipoinscrito_id"=>$this->equipoinscrito_id));
        return $this;
    }
    public function getEquipo(){
        $query = $this->db->get_where("inscritoequipo", array("id"=>$this->equipoinscrito_id,"competicion_id"=>$this->competicion_id));
        $ei = new Inscritoequipo(); 
        $ei->cargar($query->result()[0]); 
        return $ei;
    }
}
?>