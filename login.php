<?php
    header('Content-Type: application/json; charset=utf-8');
    $id = $_POST['id'];
    $password = $_POST['password'];
    echo json_encode(['result'=>true]);
    //echo json_encode(['id' => $id,'password'=>$password]);
