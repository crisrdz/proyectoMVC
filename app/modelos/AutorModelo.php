<?php
/**
 * Autor Modelo
 */
class AutorModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getAutores(){
    $data = $this->db->querySelect("SELECT * FROM autor");
    return $data;
  }

  public function getAutor($id){
    $data = $this->db->querySelect("SELECT * FROM autor WHERE id=".$id);
    return $data;
  }

  public function insertarAutor($nombres, $apellidos, $nacimiento, $nacionalidad){
    $sql = "INSERT INTO autor VALUES(0,";
    $sql.= "'".$nombres."', ";
    $sql.= "'".$apellidos."', ";
    $sql.= "'".$nacimiento."', ";
    $sql.= "'".$nacionalidad."')";
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."autor");
      exit();
    } else {
      exit("Error al insertar los datos del autor");
    }
  }

  public function modificarAutor($id, $nombres, $apellidos, $nacimiento, $nacionalidad){
    $sql = "UPDATE autor SET ";
    $sql.= "nombres='".$nombres."', ";
    $sql.= "apellidos='".$apellidos."', ";
    $sql.= "nacimiento='".$nacimiento."', ";
    $sql.= "nacionalidad='".$nacionalidad."' ";
    $sql.= "WHERE id=".$id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."autor");
      exit();
    } else {
      exit("Error al modificar los datos del autor");
    }
  }

  public function borrarAutor($id){
    $sql = "DELETE FROM autor ";
    $sql.= "WHERE id=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."autor");
      exit();
    } else {
      exit("Error al borrar el autor");
    }
  }
}
?>