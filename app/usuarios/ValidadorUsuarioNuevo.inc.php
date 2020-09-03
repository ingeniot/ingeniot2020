<?php
include_once "ValidadorUsuario.inc.php";
include_once "RepositorioUsuario.inc.php";
class ValidadorUsuarioNuevo extends ValidadorUsuario {
  public function __construct($email,$nombre,$apellido,$conexion) {
      $this->aviso_inicio = "<br> <div class= 'alert alert-danger' role='alert'>";
      $this->aviso_cierre = "</div>";
      $this->email = "";
      $this->nombre = "";
      $this->apellido = "";
      $this->error_email = $this->validar_email($conexion, $email);
      $this->error_nombre = $this->validar_nombre($conexion, $nombre);
      $this->error_apellido = $this->validar_apellido($conexion, $apellido);
      }
}
