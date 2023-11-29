<?php 
    namespace Fajri\Controller{

    use Fajri\App\View;
    use Fajri\Service\KataService;
        class HomeController{
            public function index(){
                $model = ["title" => "Home"];
                $service = new KataService;
                $grup = $service->showGrup();
                if($grup){
                    $model = ["title" => "Home", "grup" => $grup];
                }
                View::render("home.php", $model);
            }
        }
    }
?>