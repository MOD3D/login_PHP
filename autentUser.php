<?php
error_reporting(0);
$usuario = $_GET['usuario'];
$clave = $_GET['contraseña'];

$dominio = "DB_Nombre";
$dominiodc = "LOCAL";
$dominioUsuario = "".$dominio.".".$dominiodc."@\\".$usuario."";
$dirActivoPath = "LDAP://".$dominio.".".$dominiodc."/DC=".$dominio."";

$ldapconn = ldap_connect($dirActivoPath);

if ($ldapconn) {

}else{
    echo "Usuario no existe";
}
?>




