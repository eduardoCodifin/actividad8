<?php
    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $real_name=$_POST['real_name'];
    $hero_name=$_POST['hero_name'];
    $photo=$_POST['photo'];
    $aditional=$_POST['aditional'];


    $sql="INSERT INTO superheroes (real_name, hero_name, photo, aditional) VALUES('$real_name','$hero_name','$photo','$aditional')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: superheroes.php");
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);

    }
?>