<?php 

namespace App\Models;

use CodeIgniter\Model;

class clienteModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    protected $allowedFields = 
    [
        'nombre',
        'email',
        'idPerfume'
        
    ];

}