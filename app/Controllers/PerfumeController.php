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

}