<?php 
  include('Backend/conexion.php');
  $query = "select * from images";
  $resultado = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MYG</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="submit" value="upload" class="btn btn-primary" name="upload">
    <?php
        if(isset($_POST["upload"])){
            
            header('Location:../uploading.php');
            exit();
        }
        ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                 <!-- class="text-primary text-center" -->
                    <h1>MYG</h1>
                    <hr>
                    <div class="card-columns">
                        <?php foreach($resultado as $row){ ?>
                        <div class="card">
                            <a href="Backend/imagenes/<?php echo $row['img_name'];?>" download="<?php echo $row['img_name'];?>"> <img src="Backend/imagenes/<?php echo $row['img_name'];?>" class="card-img-top" alt="..."> </a> 
                            <!-- <div class="card-body">
                                <h5 class="card-title"><strong><?php echo $row['category']; ?></strong></h5>
                            </div> -->          
                        </div>
                        <?php }?>
                    </div>
                
            </div>
        </div>
    </div>

    <div class="float">
        IMAGENCITA
        <p>holhoohasfj;ljf</p>

    </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>