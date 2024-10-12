<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\clienteModel;

class ClienteController extends BaseController{

    protected $clienteModel;

    public function __construct(){
        $this->clienteModel = new clienteModel(); 
    }
    public function index()
    {
       $clientes = $this->clienteModel->findAll();
        $data = ['clientes' => $clientes];
       return view('Cliente/viewCliente',$data);

    }

    public function create()
    {
        if ($this->request->getMethod() === 'POST') {
            $nombre = $this->request->getPost('nombre'); 
            $email = $this->request->getPost('email'); 
            $idPerfume = $this->request->getPost('idPerfume');
          

            $clienteModel = new clienteModel();
            $data = [
                'nombre' => $nombre,
                'email' => $email,
                'idPerfume' => $idPerfume
            ];

            if ($clienteModel->insert($data)) {
                return redirect()->to('/cliente'); 
            } else {
                return "Error al registrar al cliente.";
            }
        }

        return "Método no permitido.".$this->request->getMethod();
    }

 
        public function delete($id)
    {
        $clienteModel = new clienteModel();

        // Prueba eliminar el registro
        if ($clienteModel->delete($id)) {
            return "El cliente ha sido eliminada correctamente.";
        } else {
            return "Error al eliminar al cliente";
        }
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'POST') {
            $nombre = $this->request->getPost('nombre'); 
            $email = $this->request->getPost('email'); 
            $idPerfume = $this->request->getPost('idPerfume');

            $clienteModel = new ClienteModel();

            // Preparar los datos para actualizar
            $data = [
                'nombre' => $nombre,
                'email' => $email,
                'idPerfume' => $idPerfume
            ];

            // Actualizar la venta
            if ($clienteModel->update($id, $data)) {
                return "El cliente se ha actualizado correctamente.";
            } else {
                return "Error al actualizar al cliente";
            }
        }

        return "Método no permitido.";
    }

    public function findById($id)
    {
        $clienteModel = new clienteModel();
        
        // Obtener venta por ID
        $cliente = $clienteModel->find($id);
        
        if ($cliente) {
            // Devolver view
            var_dump($cliente);
        } else {
            return "El cliente no se ha encontrado.";
        }
    }
    public function new() {
        return view('Cliente/createCliente');
        }






    }
