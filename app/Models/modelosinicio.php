<?php namespace App\Models;

    use CodeIgniter\Model;

    class modeloinicio extends Model{
        public function colocar_usuarios(){
            $sign1 = $this->db->query("SELECT * FROM usuario");
            return $sign1->getResult();
        }
    }