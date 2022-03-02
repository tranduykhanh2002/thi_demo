<?php 
namespace App\Controllers;
use App\Models\Member;
use Illuminate\Contracts\View\View;

class MemberController{
    public function addForm(){
        include_once "./app/views/member/add-form.php";

    }
    public function create(){
        $data = [
            'name' => $_POST['name'],
            'is_leader' => $_POST['is_leader'],
            'department' => $_POST['department'],
            'salary' => $_POST['salary'],
            'phone' => $_POST['phone'],
        ];
        $model = new Member();
        $model->insert($data);
        header('location:'.BASE_URL.'admin/member');
    }
    public function remove(){
        $idS = $_GET['id'];
        Member::destroy($idS);
        header('location:'.BASE_URL.'member');
    }
    public function updateForm(){
        $idS = $_GET['id'];
        $getS = Member::where('id',$idS)->get();
        // var_dump($getS);
        include_once "./app/views/member/update-form.php";
    }
    public function saveUpdate(){
        $idS = $_GET['id'];
        $data = [
            'name' => $_POST['name'],
            'is_leader' => $_POST['is_leader'],
            'department' => $_POST['department'],
            'salary' => $_POST['salary'],
            'phone' => $_POST['phone'],
        ];
        // $model = new School();
         Member::where('id',$idS) -> update($data);
         header('location:'.BASE_URL.'admin/member');
    }
 
}