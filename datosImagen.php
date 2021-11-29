
<?php 
    $nombre=$_REQUEST['nombre'];
    $conexion=new mysqli('localhost','root','ColomSop1.1.3*_','imagenes');
    $nombreImagen=$_FILES['imagen']['name'];
    $tipoImagen=$_FILES['imagen']['type'];
    $tamaño=$_FILES['imagen']['size'];
    if($tamaño<=1000000){//1000000 equivale un mega, esta declarado en bytes
        if($tipoImagen=="image/jpeg" || $tipoImagen=="image/jpg" || $tipoImagen=="image/png" || $tipoImagen=="image/gif" ){
            $carpetaDestino=$_SERVER['DOCUMENT_ROOT'] . "/subidaImagen/archivos/";//DOCUMENT_ROOT apunta hasta el hdocs
            move_uploaded_file($_FILES['imagen']['tmp_name'],$carpetaDestino.$nombreImagen);//se mueve el archivo de la carpeta temporal a la carpeta
        }
        else{
            echo "el tipo de formato no se puede subir";
        }
    }else{
        echo "supera el tamaño permitido";
    }
    $consulta="insert into registro(nombre,ruta)values('$nombre','$nombreImagen')";
    $conexion->query($consulta)
    //NOTA CUANDO QUIEREN PLASMAR O VER LA IMAGEN SOLO HACE LA CONSULTA SELECT CON EL NOMBRE DE LA IMAGEN Y SE MOSTRARA
    
?>