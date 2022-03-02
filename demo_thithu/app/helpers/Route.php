<?php
namespace App\Helpers;
use App\Controllers\DashbroadController;
use App\Controllers\MemberController;
use App\Controllers\ProjectController;
use App\Models\Project;
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
            $router->get('trang-chu',[DashbroadController::class,'indexP']);
            $router->get('project/tao-moi',[ProjectController::class,'addForm']);
            $router->post('project/tao-moi',[ProjectController::class,'create']);
            $router->get('project/xoa',[ProjectController::class,'remove']);
            $router->get('project/cap-nhat',[ProjectController::class,'updateForm']);
            $router->post('project/cap-nhat',[ProjectController::class,'saveUpdate']);
            //
            $router->get('member',[DashbroadController::class,'index']);
            $router->get('member/xoa',[MemberController::class,'remove']);
            $router->get('member/tao-moi',[MemberController::class,'addForm']);
            $router->post('member/tao-moi',[MemberController::class,'create']);
            $router->get('member/cap-nhat',[MemberController::class,'updateForm']);
            $router->post('member/cap-nhat',[MemberController::class,'saveUpdate']);
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
        $router->get('project/tao-moi',[ProjectController::class,'addForm']);
        $router->get('member', [DashbroadController::class, 'index']);
        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}
?>