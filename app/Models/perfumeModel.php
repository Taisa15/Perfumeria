<?php 

namespace App\Models;

use CodeIgniter\Model;

class perfumeModel extends Model
{
    protected $table = 'perfume';
    protected $primaryKey = 'id';
    protected $allowedFields = 
    [
        'nombre',
        'descripcion',
        'ml',
        'precio'
    ];

}