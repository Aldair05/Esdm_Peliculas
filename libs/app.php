<?php 

    class App{

        function __construct(){
            // echo "<p>Nueva App</p>";

            
            //Obtiene la url y posteriormente la divide cuando encuentra un /
            $url = isset($_GET['url']) ? $_GET['url'] : null ;
            $url = rtrim($url,'/');
            $url = explode('/',$url);
            // echo "$url";

            // var_dump($url);

            if (empty($url[0])) {
                $archivoController = 'controllers/main.php';
                require_once $archivoController;
                $controller = new Main();
                $controller->loadModel('main');
                $controller->render();
                return false; 
            }


            //Se concatena la variable url divida para concatenar el .php 
            $archivoController = 'controllers/'. $url[0] .'.php';

            //valida si existe el archivo 
            if (file_exists($archivoController)) {
                //Carga el archivo que se encuentra en la posicion
                require_once $archivoController;
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                //contiene el # de elementos del arreglo
                $nparam = sizeof($url);
                
                if ($nparam > 1 ) {
                    if ($nparam > 2 ) {
                        $param = [];
                        for($i = 2 ; $i < $nparam ; $i++){
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }else{
                    $controller->render(); 
                }
                
            }else{
                require_once 'controllers/errorMessage.php';
                $error = new ErrorMessage();
            }
            




        }

    }

?>