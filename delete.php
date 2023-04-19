<?php

    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="DELETE FROM superheroes  WHERE id='$id'";
    $query=mysqli_query($con,$sql);


        if($query){
            Header("Location: superheroes.php");
        }
        else {
            echo "Error al eliminar el superheroe: " . mysqli_error($con);
        }
?>