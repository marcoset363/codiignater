<?php namespace App\Models;

use CodeIgniter\Model;

class productos extends Model{
    protected $table = 'producto';
    protected $primaryKey = 'idproductos1';
    protected $allowedFields =[
        'nombrepro',
        'descripcion',
        'link',
        'precio'
    ];
}