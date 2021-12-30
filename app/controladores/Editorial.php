<?php
/**
 * Editorial
 */
class Editorial extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("EditorialModelo");
  }

  public function index(){
    $data = $this->modelo->getEditoriales();
    //llamamos a la vista
    $this->vista("EditorialVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
      $direccion = isset($_POST["direccion"])?$_POST["direccion"]:"";
      $ciudad = isset($_POST["ciudad"])?$_POST["ciudad"]:"";
      $pais = isset($_POST["pais"])?$_POST["pais"]:"";

      $this->modelo->modificarEditorial($id, $nombre, $direccion, $ciudad, $pais);

    } else {
      $data = $this->modelo->getEditorial($id);
      $datos = [
        "id" => $id,
        "nombre" => $data[0]["nombre"],
        "direccion" => $data[0]["direccion"],
        "ciudad" => $data[0]["ciudad"],
        "pais" => $data[0]["pais"]
      ];
      $this->vista("EditorialModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarEditorial($id);

    } else {
      $data = $this->modelo->getEditorial($id);
      $datos = [
        "id" => $id,
        "nombre" => $data[0]["nombre"],
        "direccion" => $data[0]["direccion"],
        "ciudad" => $data[0]["ciudad"],
        "pais" => $data[0]["pais"]
      ];
      $this->vista("EditorialBorrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
      $direccion = isset($_POST["direccion"])?$_POST["direccion"]:"";
      $ciudad = isset($_POST["ciudad"])?$_POST["ciudad"]:"";
      $pais = isset($_POST["pais"])?$_POST["pais"]:"";
      

      $this->modelo->insertarEditorial($nombre, $direccion, $ciudad, $pais);

    } else {
      $this->vista("EditorialAlta");
    }
  }
}
?>