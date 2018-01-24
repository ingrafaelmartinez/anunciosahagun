<?php
/**
 *
 */
class funciones{
  private $base;
  function __construct($base){
    $this->setDb($base);
  }
  public function setDb(PDO $base){
    $this->base = $base;
  }
  public function NuevoUsuario(Usuario $usuario){
    $sql = "INSERT INTO `tb_user` (`id_user`, `nombre`, `apellidos`, `identificacion`,
                                    `email`, `pass`, `direccion`, `ciudad`, `departamento`,
                                     `pais`, `telefono`) VALUES (NULL, '".$usuario->getNombre()."', '".$usuario->getApellidos()."',
                                      '".$usuario->getIdentificacion()."', '".$usuario->getEmail()."', '".$usuario->getPassword()."',
                                       '".$usuario->getDireccion()."', '".$usuario->getCiudad()."', '".$usuario->getDepartamento()."',
                                        '".$usuario->getPais()."', '".$usuario->getTelefomo()."')";
    $this->base->exec($sql);
    $nuevoregistro = $this->base->lastInsertid();
    return $nuevoregistro;

  }
  public function ListarCategoria(){
    global $conexion;
    $result = $this->base->query("SELECT * FROM tb_categ");
    return $result;
  }

}




 ?>
