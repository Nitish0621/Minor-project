<?php
if(isset($_POST['uname'])&&
isset($_POST['pass'])&&
isset($_POST['role'])){

    include"../DB_connection.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    if (empty($uname)){
        $em = "username is required";
        header("Location: ../login.php?error=$em");
        exit;
    }else if(empty($pass)){
        $em = "password is required";
        header("Location: ../login.php?error=$em");
        exit;
    }else if(empty($role)){
        $em = "Error is occured";
        header("Location: ../login.php?error=$em");
        exit;
    }else{
        echo"okay";
    }
}
else{
    header("Location: ../login.php");
}

?>