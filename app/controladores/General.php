<?php

class General{

    public function vista($vista){
        if(file_exists("../app/vistas/".$vista.".php")){
          require_once("../app/vistas/".$vista.".php");
        } else {
          die("La vista no existe");
        }
      }

    public function index(){
        //llamamos a la vista
        $this->vista("MenuVista");
    }
}

?>