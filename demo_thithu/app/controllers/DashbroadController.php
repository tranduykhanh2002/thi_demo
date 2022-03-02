<?php 
namespace App\Controllers;
use App\Models\Member;
use App\Models\Project;

class DashbroadController{
    public function index(){
        $getM = Member::all();
        include_once "./app/views/member/index.php";
        // return "Chao mung den trang quan tri";
    }
    public function indexP(){
        $getP = Project::all();
        include_once "./app/views/project/index.php";
        // return "Chao mung den trang quan tri";
    }
}