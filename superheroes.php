<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM superheroes";
    $query=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>SUPERHEROES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href ="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                <div class="row">
                    
                    <div class="col-md-4">
                        <h1>Ingrese Datos</h1>
                            <form action="insertar.php" method="POST">

                                <!-- <input type="text" class="form-control mb-3" name="id" id="id" placeholder="Id"> -->
                                <input type="text" class="form-control mb-3" name="real_name" real_name="real_name" placeholder="Real name">
                                <input type="text" class="form-control mb-3" name="hero_name" hero_name="hero_name" placeholder="Hero name">
                                <input type="text" class="form-control mb-3" name="photo" photo="photo" placeholder="Photos link">
                                <input type="text" class="form-control mb-3" name="aditional" aditional="aditional" placeholder="Aditional">

                                <input type="submit" class="btn btn-primary">
                            </form>
                    </div>

                    <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Real Name</th>
                                        <th>Hero Name</th>
                                        <th>Photo</th>
                                        <th>Aditional</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>          
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['real_name'] ?></td>
                                        <td><?php echo $row['hero_name'] ?></td>
                                        <td><img src="<?php echo $row['photo'] ?>" class="img-thumbnail"></td>
                                        <td><?php echo $row['aditional'] ?></td>
                                        <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></td>
                                        <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </body> 
</html>