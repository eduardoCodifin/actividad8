<?php
    function conectar(){
        $host="localhost";
        // $host="127.0.0.1";
        $user="root";
        $pass="";
        $bd="superheroes";
        // $bd="tarea";
        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$bd);

        return $con;
    }
?>
