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

            $imageFile = $this->request->getFile('image');
 
            $imageName = $imageFile->getRandomName(); 

            $imageFile->move(WRITEPATH . '../public/images', $imageName);
    
            $perfumeModel = new PerfumeModel();
    
            $data = [
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'ml' => $ml,
                'precio' => $precio,
                'imagen' => $imageName 
            ];
    
            if ($perfumeModel->insert($data)) {
            
                return redirect()->to('/perfume'); 
            } else {
                return "Error al registrar el perfume.";
            }
        }
    
        return "Método no permitido.";
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
            $imagen = $this->request->getPost('imagen');

            $perfumeModel = new PerfumeModel();

            // Preparar los datos para actualizar
            $data = [
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'ml' => $ml,
                'precio' => $precio,
                'imagen' => $imagen
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
            return view('Perfume/createPerfume');
        } else {
            return "Perfume no encontrado.";
        }
    }

    public function new() {
        return view('Perfume/createPerfume');
        }

    }