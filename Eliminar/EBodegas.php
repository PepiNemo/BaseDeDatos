<?php
#conectar a la base de datos
include_once '../BD/conexion.php';
$objeto= new Conexion();
$conn=$objeto->Conectar();

#POST
$codigo_bodega=$_POST['codigo_bodega'];
$codigo_producto=$_POST['codigo_producto'];


#insertar datos recibidos por post
$consulta='DELETE from Bodegas where Bodegas.codigo_bodega='.$codigo_bodega.'
and Bodegas.codigo_producto='.$codigo_producto.';';
$resultado=$conn->prepare($consulta);
$resultado->execute();

#Comprobar si se inserto
if($resultado){
    echo '<script language="javascript">alert("Eliminado Correctamente");window.location.href="../Tablas/Bodegas.php"</script>'; 
}else{
    echo '<script language="javascript">alert("No se pudo Eliminar");window.location.href="../index.html"</script>';  

}


?>