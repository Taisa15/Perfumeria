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

    }

