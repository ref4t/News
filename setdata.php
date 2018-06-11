<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */

require 'config.php';

$data=$_POST['newsbody'];
$statement="insert into test(summertext) values ('$data')";

if(mysqli_query($conn,$statement))
{
    header('location:index.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);