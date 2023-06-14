<?php namespace App\Models;

    use CodeIgniter\Model;

    class modelosprod extends Model{
        public function colocar_productos(){
            $productos = $this->db->query("SELECT * FROM producto");
            return $productos->getResult();
        }
    }