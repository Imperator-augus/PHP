<?php
    include_once 'db/db_user.php';
    //login.php 에서 넘어오는 값을 적절한 변수에 담는다.
    //변수의 값을 출력.
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];

    echo "uid : $uid <br>";
    echo "upw : $upw <br>";

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);
    if(empty($result))
    {
        echo "해당하는 아이디 없음";
        exit;
    }

    echo "i_user : " , $result["i_user"], "<br>";
    echo "pw : " , $result["upw"], "<br>";

    // 비밀번호가 맞으면 "list.php로 주소이동
    // 비밀번호가 다르면  login.php로 주소이동

    
    // $param1 = [
    //     "upw" => $upw
    // ];

    // $result1 = sel_user1($param1);
    // if(empty($result1))
    // {
    //     header("location: login.php");
    // }
    // header("location: list.php");

    
    if($upw === $result["upw"])
    {
        session_start();
        $_SESSION["login_user"] = $result;
        // print_r($result);
        header("location: list.php");
    }
    else
    {
        header("location: login.php");
    }