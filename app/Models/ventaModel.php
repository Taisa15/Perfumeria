<?php 

namespace App\Models;

use CodeIgniter\Model;

class ventaModel extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'id';
    protected $allowedFields = 
    [
        'fecha',
        'total'
        
    ];

}