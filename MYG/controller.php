<?php
    if(!empty($_POST['entrar'])) {
        if(empty($_POST['user']) and empty($_POST['pwd'])) {
            echo 'div class="alert alert-danger"> LOS CAMPOS ESTÁN VACIOS</div>';
        }else {
            $user=$_POST['user'];
            $pwd=$_POST['pwd'];
            $sql=$conn->query("select * from user where username='$user' and pwd='$pwd'");
            if ($data=$sql->fetch_object()) {
                header("location:index.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
            
        }
    }
?>
