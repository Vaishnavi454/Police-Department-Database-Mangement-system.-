<?php
    session_start();
    include('config.php');
    //extract($_POST);
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $phone = $_POST['phone'];
    //$q_reg = "INSERT INTO police_officer (po_uname, po_pwd, po_name, po_rank, po_phone) VALUES  $uname, $pwd, $name, $rank, $phone)";
    $q_reg = "INSERT INTO police_officer (po_id, po_uname, po_pwd, po_name, po_rank, po_phone) VALUES (NULL, '$uname', '$pwd', '$name', '$rank', '$phone')";

    mysqli_query($con, $q_reg);
    $id=mysqli_insert_id($con);
    $_SESSION['user']=$id;
    header('location:index.php');
?>
