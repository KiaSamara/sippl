<?php

include "conn.php";

$username = $_POST['input-username'];
$password = $_POST['input-password'];
$result = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result) > 0){
    $row=mysqli_fetch_array($result);
    if($row['level_pengguna']==1){
        $_SESSION['username_akun'] = $username;
        header("location:indexcivitas.php");
    }else if($row['level_pengguna']==2){
        $_SESSION['username_akun'] = $username;
        header("location: indexcivitas.php");
    }
}else{
    header("location: login.php");
}

mysqli_close($conn);

?>