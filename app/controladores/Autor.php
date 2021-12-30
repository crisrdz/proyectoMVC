<?php
/**
 * Autor
 */
class Autor extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("AutorModelo");
  }

  public function index(){
    $data = $this->modelo->getAutores();
    //llamamos a la vista
    $this->vista("AutorVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $nombres = isset($_POST["nombres"])?$_POST["nombres"]:"";
      $apellidos = isset($_POST["apellidos"])?$_POST["apellidos"]:"";
      $nacimiento = isset($_POST["nacimiento"])?$_POST["nacimiento"]:"";
      $nacionalidad = isset($_POST["nacionalidad"])?$_POST["nacionalidad"]:"";

      $this->modelo->modificarAutor($id, $nombres, $apellidos, $nacimiento, $nacionalidad);

    } else {
      $data = $this->modelo->getAutor($id);
      $datos = [
        "id" => $id,
        "nombres" => $data[0]["nombres"],
        "apellidos" => $data[0]["apellidos"],
        "nacimiento" => $data[0]["nacimiento"],
        "nacionalidad" => $data[0]["nacionalidad"]
      ];
      $this->vista("AutorModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarAutor($id);

    } else {
      $data = $this->modelo->getAutor($id);
      $datos = [
        "id" => $id,
        "nombres" => $data[0]["nombres"],
        "apellidos" => $data[0]["apellidos"],
        "nacimiento" => $data[0]["nacimiento"],
        "nacionalidad" => $data[0]["nacionalidad"]
      ];
      $this->vista("AutorBorrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nombres = isset($_POST["nombres"])?$_POST["nombres"]:"";
      $apellidos = isset($_POST["apellidos"])?$_POST["apellidos"]:"";
      $nacimiento = isset($_POST["nacimiento"])?$_POST["nacimiento"]:"";
      $nacionalidad = isset($_POST["nacionalidad"])?$_POST["nacionalidad"]:"";
      

      $this->modelo->insertarAutor($nombres, $apellidos, $nacimiento, $nacionalidad);

    } else {
      $this->vista("AutorAlta");
    }
  }
}
?>