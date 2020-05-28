<?php
include('connect.php');
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sql="DELETE FROM blog where blogid=$id";
    header('Location:blog.php');

}
else{
    echo "Error: ". $sql. "<br>". $conn->error;
}

?>