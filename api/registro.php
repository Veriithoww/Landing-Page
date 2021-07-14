<?php
    $con=mysqli_connect('localhost','root','','landing');
    if ($con) {
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $dirección=$_POST['dirección'];
            $correo=$_POST['correo'];
            $identificador=$_POST['identificador'];

            $sql="INSERT INTO registro
            (nombre,apellido,dirección,correo,identificador)
            VALUES
            ('$nombre','$apellido','$dirección','$correo','$identificador')";
            $result=mysqli_query($con,$sql);
            if ($result) {
                echo 1;
            }else{
                echo 2;
            }
        }else{
            echo 3;
        }
