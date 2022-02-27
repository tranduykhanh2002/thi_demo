<?php 
namespace App\Controllers;
use App\Models\School;
use Illuminate\Contracts\View\View;

class SchoolController{
    public function addForm(){
        include_once "./app/views/school/add-form.php";

    }
    public function create(){
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'logo' => $_POST['logo']
        ];
        $model = new School();
        $model->insert($data);
        header('location:'.BASE_URL.'admin/trang-chu');
    }
    public function remove(){
        $idS = $_GET['id'];
        School::destroy($idS);
        header('location:'.BASE_URL.'admin/trang-chu');
    }
    public function updateForm(){
        $idS = $_GET['id'];
        $getS = School::where('id',$idS)->get();
        // var_dump($getS);
        include_once "./app/views/school/update-form.php";
    }
    public function saveUpdate(){
        $idS = $_GET['id'];
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'logo' => $_POST['logo']
        ];
        // $model = new School();
         School::where('id',$idS) -> update($data);
         header('location:'.BASE_URL.'admin/trang-chu');
    }
}