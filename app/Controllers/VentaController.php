<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ventaModel;

class ventaController extends BaseController{

    protected $ventaModel;

    public function __construct(){
        $this->ventaModel = new ventaModel(); 
    }
    public function index()
    {
       $ventas = $this->ventaModel->findAll();
        $data = ['ventas' => $ventas];
       return view('Venta/viewVenta',$data);

    }

    public function create()
    {
        if ($this->request->getMethod() === 'POST') {
            $fecha = $this->request->getPost('fecha'); 
            $total = $this->request->getPost('total'); 
          

            $ventaModel = new ventaModel();
            $data = [
                'fecha' => $fecha,
                'total' => $total
            ];

            if ($ventaModel->insert($data)) {
                return "Venta registrada correctamente.";
            } else {
                return "Error al registrar su venta.";
            }
        }

        return "Método no permitido.".$this->request->getMethod();
    }

 
        public function delete($id)
    {
        $ventaModel = new ventaModel();

        // Prueba eliminar el registro
        if ($ventaModel->delete($id)) {
            return "Su venta ha sido eliminada correctamente.";
        } else {
            return "Error al eliminar su venta.";
        }
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'POST') {
            $fecha = $this->request->getPost('fecha'); 
            $total = $this->request->getPost('total'); 

            $ventaModel = new VentaModel();

            // Preparar los datos para actualizar
            $data = [
                'fecha' => $fecha,
                'descripcion' => $descripcion
            ];

            // Actualizar la venta
            if ($ventaModel->update($id, $data)) {
                return "Su venta se ha actualizado correctamente.";
            } else {
                return "Error al actualizar su venta.";
            }
        }

        return "Método no permitido.";
    }

    public function findById($id)
    {
        $ventaModel = new VentaModel();
        
        // Obtener venta por ID
        $venta = $ventaModel->find($id);
        
        if ($venta) {
            // Devolver view
            var_dump($venta);
        } else {
            return "Su venta no se ha encontrado.";
        }
    }

    }