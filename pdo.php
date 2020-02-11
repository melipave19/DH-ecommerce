<?php
$dns = "mysql:dbname=DER; host=127.0.0.1; port=3306";
$usuario = "root";
$pass = "";

try {
  $baseDatos = new PDO($dns, $usuario, $pass);
  $baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

} catch (\Exception $e) {
  var_dump($e->getMessege());
  echo "Hubo un error!"; exit;

}

?>
