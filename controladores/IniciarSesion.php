<?php
    include '../Constantes.php';
    include '../Librerias.php';
?>
<?php
$oUsr=new Usuario();
$oUsr->nomUsuario=$_POST['nombre'];
$oUsr->pwdUsuario=$_POST['clave'];
if($oUsr->VerificaUsuarioClave()){
    $_SESSION['USR']=$oUsr->TraertUsuario();
    
    $array = $_SESSION['USR'];
    $oUsuario = new Usuario();
    $oUsuario = $array;
    echo $oUsuario->nomUsuario;
}
else{
    echo 'No se encontro';
    header('location:http://localhost:8085/Sessiones/index.php');
}