<?php
if(isset($_GET['id'])){
    include "conn.php";
<<<<<<< HEAD
    $air_id = $_GET['id'];
    $air_sql = "DELETE FROM filme WHERE codigo = $air_id";
    $air_result = mysqli_query($air_conn,$air_sql);

    if($air_result){
=======
    $id = $_GET['id'];
    $sql = "DELETE FROM filme WHERE codigo = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
        header("Location: index.php");
        exit();
    }

}
?>