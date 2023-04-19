<?php

    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $real_name=$_POST['real_name'];
    $hero_name=$_POST['hero_name'];
    $photo=$_POST['photo'];
    $aditional=$_POST['aditional'];

    $sql="UPDATE superheroes SET id='$id',real_name='$real_name',hero_name='$hero_name' ,photo='$photo' ,aditional='$aditional' WHERE id='$id'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: superheroes.php");
        }
?>
