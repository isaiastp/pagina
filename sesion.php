<?php
class sesion {
  function __construct() {
     session_start ();
  }
  public function set($name, $valor) {
     $_SESSION [$name] = $valor;
  }
  public function get($name) {
     if (isset ( $_SESSION [$name] )) {
        return $_SESSION [$name];
     } else {
         return false;
     }
  }
  public function elimina_variable($name) {
      unset ( $_SESSION [$name] );
  }
  public function termina_sesion() {
      $_SESSION = array();
      session_destroy ();
  }
}
?>