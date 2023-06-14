<?php namespace App\Models;

    use CodeIgniter\Model;

class login extends Model{
        protected $table = 'usuario';
        protected $primaryKey = 'idper';
        protected $allowedFields =[
            'nombre',
            'email',
            'usuarioper',
            'emailcontra',
        ];
    }