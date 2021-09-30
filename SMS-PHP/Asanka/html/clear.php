<?php

    require '../../extra/html/config.php';

    $id = $_GET['id'];

    $sql="DELETE FROM studentmarks WHERE studentId='$id'";

    if(mysqli_query($con,$sql))
    {

        echo "sucess";

    }
    else
    {
        echo "failed";
    }

?>