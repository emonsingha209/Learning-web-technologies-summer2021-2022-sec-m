<?php
    require_once "DB.php";

    function login($UserName, $Password,$UserType){
        $conn = getConnection();
		$sql = "select * from logininfo where UserName='{$UserName}'and Password='{$Password}' and UserType='{$UserType}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }
?>