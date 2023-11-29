<?php 
    namespace Fajri\App{
        class Route{
            public static array $routes;
            public static function add(string $path, string $method, string $controller, string $function){
                self::$routes[] = [
                    "path" => $path,
                    "method" => $method,
                    "controller" => $controller,
                    "function" => $function  
                ];
            }
            public static function run(){
                $path = "/";
                if(isset($_SERVER["PATH_INFO"])){
                    $path = $_SERVER["PATH_INFO"];
                }
                $method = $_SERVER["REQUEST_METHOD"];
                foreach(self::$routes as $route){
                    $pattern = "#^" . $route["path"] . "$#";
                    if(preg_match($pattern, $path, $variables) && $route["method"] == $method){
                        $controller = new $route["controller"];
                        $function = $route["function"];
                        array_shift($variables);
                        call_user_func_array([$controller, $function], $variables);
                    }
                }
            }
        }
    }
?>