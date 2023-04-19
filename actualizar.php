<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM superheroes WHERE id='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
        <head>
            <title></title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/style.css" rel="stylesheet">
            <title>Actualizar</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            
        </head>
        <body>
                    <div class="container mt-5">
                        <form action="update.php" method="POST">
                        
                                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                    
                                    <!-- <input type="text" class="form-control mb-3" name="id" placeholder="Id" value="<?php echo $row['id']  ?>"> -->
                                    <input type="text" class="form-control mb-3" name="real_name" placeholder="Real Name" value="<?php echo $row['real_name']  ?>">
                                    <input type="text" class="form-control mb-3" name="hero_name" placeholder="Hero Name" value="<?php echo $row['hero_name']  ?>">
                                    <input type="text" class="form-control mb-3" name="photo" placeholder="Photo" value="<?php echo $row['photo']  ?>">
                                    <input type="text" class="form-control mb-3" name="aditional" placeholder="Aditional" value="<?php echo $row['aditional']  ?>">
                                    
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                        </form>
                        
                    </div>
        </body>
</html>