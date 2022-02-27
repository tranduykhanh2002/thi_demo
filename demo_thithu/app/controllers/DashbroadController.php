<?php 
namespace App\Controllers;
use App\Models\School;
use App\Models\Teacher;

class DashbroadController{
    public function index(){
        $getS = School::all();
        include_once "./app/views/school/index.php";
        // return "Chao mung den trang quan tri";
    }
    public function indexT(){
        $getT = Teacher::all();
        include_once "./app/views/teacher/index.php";
        // return "Chao mung den trang quan tri";
    }
}