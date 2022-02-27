<?php 
namespace App\Controllers;
use App\Models\Teacher;
use Illuminate\Contracts\View\View;

class TeacherController{
    public function addForm(){
        include_once "./app/views/teacher/add-form.php";

    }
    public function create(){
        $data = [
            'name' => $_POST['name'],
            'gender' => $_POST['gender'],
            'avatar' => $_POST['avatar'],
            'major' => $_POST['major']
        ];
        $model = new Teacher();
        $model->insert($data);
        header('location:'.BASE_URL.'admin/giao-vien');
    }
    public function remove(){
        $idS = $_GET['id'];
        Teacher::destroy($idS);
        header('location:'.BASE_URL.'admin/giao-vien');
    }
    public function updateForm(){
        $idS = $_GET['id'];
        $getT = Teacher::where('id',$idS)->get();
        // var_dump($getS);
        include_once "./app/views/teacher/update-form.php";
    }
    public function saveUpdate(){
        $idS = $_GET['id'];
        $data = [
            'name' => $_POST['name'],
            'gender' => $_POST['gender'],
            'avatar' => $_POST['avatar'],
            'major' => $_POST['major']
        ];
        // $model = new Teacher();
         Teacher::where('id',$idS) -> update($data);
         header('location:'.BASE_URL.'admin/giao-vien');
    }
}