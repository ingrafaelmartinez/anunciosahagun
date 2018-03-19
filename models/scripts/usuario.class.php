<?php
/**
 *clase para registras nuevos usuarios ala pagina
 */
class Usuario {

  private $id;
  private $nombre;
  private $apellidos;
  private $identificaion;
  private $email;
  private $password;
  private $direcion;
  private $ciudad;
  private $departamento;
  private $pais;
  private $telefono;


  function __construct()  {
    # code...
  }
  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getApellidos(){
    return $this->apellido;
  }
  public function setApelldio($apellidos){
    $this->apellido = $apellidos;
  }
  public function getIdentificacion(){
    return $this->identificacion;
  }
  public function setIdentificacion($identificaion){
   $this->identificacion = $identificaion;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getPassword(){
    return $this->password;
  }
  public function setPassword($password){
   $this->password = $password;
  }
  public function getDireccion(){
    return $this->direccion;
  }
  public function setDireccion($direcion){
    $this->direccion = $direcion;
  }
  public function getCiudad(){
    return $this->ciudad;
  }
  public function setCiudad($ciudad){
    $this->ciudad = $ciudad;
  }
  public function getDepartamento(){
    return $this->departamento;
  }
  public function setDepartamento($departamento){
    $this->departamento = $departamento;
  }
  public function getPais(){
    return $this->pais;
  }
  public function setPais($pais){
    $this->pais = $pais;
  }
  public function getTelefomo(){
    return $this->telefono;
  }
  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }
}




 ?>
