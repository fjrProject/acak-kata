<?php 
    namespace Fajri\Controller{

    use Fajri\App\View;
    use Fajri\Service\KataService;

        class AddController{
            public function index(){
                $model = [
                    "title" => "add"
                ];
                View::render("add.php", $model);
            }
            public function post(){
                $grup = $_POST["grup"];
                $kata = $_POST["kata"];

                $service = new KataService;
                $service->addKata($grup, $kata);
                View::header("/");
            }
        }
    }
?>