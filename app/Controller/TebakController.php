<?php 
    namespace Fajri\Controller{

    use Fajri\App\View;
    use Fajri\Service\KataService;
        class TebakController{
            public function index($grup){
                $service = new KataService;
                $kataKata = $service->showKata($grup);

                $index = array_rand($kataKata);
                $_POST["history"] = $index;

                $model = [
                    "title" => $grup,
                    "index" => $index,
                    "kataKata" => $kataKata, 
                    "history" => "null," . $_POST["history"]
                ];
                View::render("tebak.php", $model);
            }
            public function post($grup){
                $history = explode(",", $_POST["history"]);

                $service = new KataService;
                $kataKata = $service->showKata($grup);
                $index = array_rand($kataKata);
                
                while($index == $_POST["index"] || in_array($index, $history)){
                    $index = array_rand($kataKata);
                    if(sizeof($history) == sizeof($kataKata)+1){
                        $index = "STOP";
                        break;
                    }
                }

                array_push($history, $index);

                $_POST["history"] = join(",", $history);

                $model = [
                    "title" => $grup,
                    "index" => $index,
                    "kataKata" => $kataKata, 
                    "history" => $_POST["history"]
                ];
                View::render("tebak.php", $model);
            }
            public function delete($grup){
                $service = new KataService;
                $service->deleteGrup($grup);
                View::header("/");
            }
            
        }
    }
?>