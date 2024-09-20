<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\perfumeModel;

class PerfumeController extends BaseController{

    private $perfumeModel;

    public function __construct(){
        $this->perfumeModel = new perfumeModel(); 
    }


    public function index()
    {
       $perfumes = $this->perfumeModel->findAll();
        $data = ['perfumes' => $perfumes];
       return view('Perfume/viewPerfume',$data);

    }

    public function create()
    {
        if ($this->request->getMethod() === 'POST') {
            $nombre = $this->request->getPost('nombre'); 
            $descripcion = $this->request->getPost('descripcion'); 
            $ml = $this->request->getPost('ml'); 
            $precio = $this->request->getPost('precio'); 

            $perfumeModel = new PerfumeModel();

            $data = [
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'ml' => $ml,
                'precio' => $precio
            ];

            if ($perfumeModel->insert($data)) {
                return "Perfume registrado correctamente.";
            } else {
                return "Error al registrar el perfume.";
            }
        }

        return "Método no permitido.".$this->request->getMethod();
    }

 
        public function delete($id)
    {
        $perfumeModel = new perfumeModel();

        // Intentar eliminar el registro
        if ($perfumeModel->delete($id)) {
            return "Perfume eliminado correctamente.";
        } else {
            return "Error al eliminar el perfume.";
        }
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'POST') {
            $nombre = $this->request->getPost('nombre'); 
            $descripcion = $this->request->getPost('descripcion'); 
            $ml = $this->request->getPost('ml'); 
            $precio = $this->request->getPost('precio'); 

            $perfumeModel = new PerfumeModel();

            // Preparar los datos para actualizar
            $data = [
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'ml' => $ml,
                'precio' => $precio
            ];

            // Actualizar el registro
            if ($perfumeModel->update($id, $data)) {
                return "Perfume actualizado correctamente.";
            } else {
                return "Error al actualizar el perfume.";
            }
        }

        return "Método no permitido.";
    }

    public function findById($id)
    {
        $perfumeModel = new PerfumeModel();
        
        // Obtener el perfume por ID
        $perfume = $perfumeModel->find($id);
        
        if ($perfume) {
            // Si se encuentra el perfume, puedes devolverlo a una vista
            var_dump($perfume);
        } else {
            return "Perfume no encontrado.";
        }
    }

    }

    

