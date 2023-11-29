<?php 
    namespace Fajri\App{
        class View{
            public static function render(string $path, array $model){
                require_once __DIR__ . "/../View/header.php";
                require __DIR__ . "/../View/$path";
                require_once __DIR__ . "/../View/footer.php";
            }
            public static function header($path){
                header("Location:$path");
                exit();
            }
        }
    }
?>