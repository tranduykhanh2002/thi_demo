<?php
namespace App\Helpers;
use App\Controllers\DashbroadController;
use App\Controllers\SchoolController;
use App\Controllers\TeacherController;
use \Phroute\Phroute\RouteCollector;
class Route{
    public static function run($url){
        $router = new RouteCollector();

        // $router->filter('auth', function(){
        //     if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        //         header('location: ' . BASE_URL. 'login');
        //         die;
        //     }
        // });

        $router->group(['prefix'=> 'admin'], function ($router){
            $router->get('trang-chu',[DashbroadController::class,'index']);
            $router->get('truong-hoc/tao-moi',[SchoolController::class,'addForm']);
            $router->post('truong-hoc/tao-moi',[SchoolController::class,'create']);
            $router->get('truong-hoc/xoa',[SchoolController::class,'remove']);
            $router->get('truong-hoc/cap-nhat',[SchoolController::class,'updateForm']);
            $router->post('truong-hoc/cap-nhat',[SchoolController::class,'saveUpdate']);
            //teacher
            $router->get('giao-vien',[DashbroadController::class,'indexT']);
            $router->get('giao-vien/tao-moi',[TeacherController::class,'addForm']);
            $router->post('giao-vien/tao-moi',[TeacherController::class,'create']);
            $router->get('giao-vien/xoa',[TeacherController::class,'remove']);
            $router->get('giao-vien/cap-nhat',[TeacherController::class,'updateForm']);
            $router->post('giao-vien/cap-nhat',[TeacherController::class,'saveUpdate']);
        });

        // $router->get('login', [LoginController::class, 'loginForm']);
        // $router->get('fake-login', [LoginController::class, 'fakeLogin']);
        // $router->get("/", [HomeController::class, 'index']);
        // $router->group(['prefix' => 'admin'], function($router){
            
        //     $router->get('dashboard', [DashboardController::class, 'index']);

        //     $router->group(['prefix' => 'subject'], function($router){
        //         $router->get('add', 
        //                 [SubjectController::class, 'addForm'], 
        //                 ['before' => 'auth']);
        //         $router->post('add', [SubjectController::class, 'saveAdd']);
        //         $router->get('{id}/edit/{name}?', [SubjectController::class, 'editForm']);
        //     });
            
        // });
        $router->get('admin', [DashbroadController::class, 'index']);
        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}
?>