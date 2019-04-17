<?php
    require_once "../../connection.php";

    $con = new connection();

    $Email = $_POST['Email'];
    $password = $_POST['psw'];
    
    $con->connect();

    $query = "SELECT * FROM persons WHERE Email='$Email' AND Password = '$password'";
    $result = mysqli_query($con->getConnect(), $query) or die("Failed to query database");
    $row = mysqli_fetch_array($result);
    if($Email == "" || $password== "")
    {
        header("Location: http://localhost/swe/PersonLogIn/Login.php");
        exit;
    }    
    if($row['Email'] == $Email && $row['Password'] == $password){
        header("Location: http://localhost/Project/AdminPanel/Panel.php"); // go to this page login success
        $con->disconnect();
        exit;

    }
    else{
        $query = "SELECT * FROM persons WHERE UserName='$Email' AND Password = '$password'";
        $result = mysqli_query($con->getConnect(), $query) or die("Failed to query database");
        $row = mysqli_fetch_array($result);
        if($row['UserName'] == $Email && $row['Password'] == $password)
        {
            header("Location: http://localhost/Project/AdminPanel/Panel.php");
            $con->disconnect();
            exit;
        }
        else
        {
            header("Location: http://localhost/swe/PersonLogIn/Login.php");
            $msg = "Wrong psw";
            echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            $con->disconnect();
            exit;
        }
        
    }


?>

