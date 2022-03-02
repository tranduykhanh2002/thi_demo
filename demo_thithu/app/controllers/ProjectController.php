<?php 
namespace App\Controllers;

use App\Models\Project;
use App\Models\School;
use Illuminate\Contracts\View\View;

class ProjectController{
    public function addForm(){
        include_once "./app/views/project/add-form.php";

    }
    public function create(){
        $data = [
            'name' => $_POST['name'],
            'code' => $_POST['code'],
            'start_date' => $_POST['start_date'],
            'end_date' => $_POST['end_date'],
            'budget' => $_POST['budget'],
        ];
        $model = new Project();
        $model->insert($data);
        header('location:'.BASE_URL.'admin/trang-chu');
    }
    public function remove(){
        $idS = $_GET['id'];
        Project::destroy($idS);
        header('location:'.BASE_URL.'admin/trang-chu');
    }
    public function updateForm(){
        $idS = $_GET['id'];
        $getS = Project::where('id',$idS)->get();
        // var_dump($getS);
        include_once "./app/views/project/update-form.php";
    }
    public function saveUpdate(){
        $idS = $_GET['id'];
        $data = [
            'name' => $_POST['name'],
            'code' => $_POST['code'],
            'start_date' => $_POST['start_date'],
            'end_date' => $_POST['end_date'],
            'budget' => $_POST['budget'],
        ];
        // $model = new School();
         Project::where('id',$idS) -> update($data);
         header('location:'.BASE_URL.'admin/trang-chu');
    }
}