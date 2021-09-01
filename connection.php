<?php

    $con=mysqli_connect('localhost','root','','Clinic');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>