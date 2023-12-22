<?php
include('conexion.php');

if(isset($_POST['Guardar'])){

    $imagen = $_FILES['image']['name'];
    $ext = $_FILES['image']['type'];
    $file  = $_FILES['image']['tmp_name'];
    $fileNameCmps = explode(".", $imagen);
    $fileExtension = strtolower(end($fileNameCmps));
    $newFileName = md5(time() . $imagen ).'.'. $fileExtension;
    $category = $_POST['category'];
    $dir = 'imagenes/'.$newFileName;
    

    if(isset($newFileName) && $newFileName != ""){

            
       if( !((strpos($ext,'gif') || strpos($ext,'jpg') || strpos($ext,'png')|| strpos($ext,'jpeg') || strpos($ext,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:../uploading.php');
       }else{
         move_uploaded_file($file,$dir);
         chmod($dir,0777);
         $query = "INSERT INTO images(img_name,category) values('$newFileName','$category')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
                
/*              $_SESSION['mensaje'] = 'se ha subido correctamente'; */
             $_SESSION['tipo'] = 'success';
             header('location:../index.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>