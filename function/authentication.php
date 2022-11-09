<?php
include 'database.php';

if(isset($_POST['register-student'])){
    $data = [
        'idnumber' => $_POST['idnumber'],
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ];

    // check if idnumber exist
    $query_select = $db->prepare("SELECT idnumber FROM student WHERE idnumber=:idnumber");
    $query_select->execute(['idnumber' => $_POST['idnumber']]); 
    $result = $query_select->fetch();
    if(!$result){
        $query_insert = "INSERT INTO student (idnumber, fullname, email, password) VALUES (:idnumber, :fullname, :email, :password)";
        $db->prepare($query_insert)->execute($data);
        $db = null;
        echo '<script type="text/javascript">alert("Successfully Registered."); window.location.href = "../login.php"; </script>';
    }else{ 
        echo '<script type="text/javascript"> alert("ID Number already registered."); window.location.href = "../login.php"; </script>';
    }
}elseif(isset($_POST['login-student'])){
    $query_select = $db->prepare("SELECT id, idnumber FROM student WHERE idnumber=:idnumber AND password=:password");
    $query_select->execute([
        'idnumber' => $_POST['idnumber'],
        'password' => md5($_POST['password'])
    ]); 
    $result = $query_select->fetch();
    if($result){
        session_start();
        $_SESSION['running'] = 1;
        $_SESSION["id"] = $result[0];
        $_SESSION["idnumber"] = $result[1];

        header('Location: ../user/dashboard.php'); exit();
    }else{
        echo '<script type="text/javascript"> alert("Invalid Credentials."); window.location.href = "../login.php"; </script>';
    }
}elseif(isset($_POST['logout-student'])){
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../login.php'); exit();
}else{
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../register.php'); exit();
}
