<?php
if (isset($_POST['userid']) && isset($_POST['pass'])){
    function validate($data){
        $data = trim($data);
        $data  = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['userid']);
    $pass = validate($_POST['pass']);
    if (empty($uname)) {
        header("Location: index.php?error=User Id is required");
        exit();

    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();

    }else{
        echo "Valid Input";
    }
    if ($uname == 'adminkhc' && $pass == 'khcv1'){
        header('Location:home.php');
    }else{
        header("Location: index.php?error=UserId or Password Not Found!");
        exit();
    }


}else{
    header("Location: index.php");
    exit();
}
?>


