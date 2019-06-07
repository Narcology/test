<?php
include_once "DB_Functions.php";
$db = new DB_Functions();
if((isset($_POST['username']))&&
    (isset($_POST['password'])))
{

    $login=$_POST['username'];
    $password=$_POST['password'];
    if($db->isUserExisted($login))
    {
        header("Location: login/UserIsExists.html");
    }
    else
    {
        $result=$db->storeUser($login,$password);
        if($result!=false)
            header("Location: login/index.php");
    }
}
?>