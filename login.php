<?php
    include('dbcon.php');
    session_start();
    $con = conectar();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['user']= $username;

    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    while($extraido = mysqli_fetch_array($result) ) {
        $_SESSION['nombres']= $extraido['nombres'];
        $_SESSION['apellidos']= $extraido['apellidos'];
        $_SESSION['nivel']= $extraido['nivel'];
        $_SESSION['email']= $extraido['email'];
    }


    $count=mysqli_num_rows($result);
    if($count > 0){
        echo 'true';
    }
    else{
            echo 'false';
    }
    ?>