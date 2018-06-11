<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 10:07 PM
 */
require 'config.php';

$statement="select * from test";
$result = mysqli_query($conn, $statement);

if (mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['summertext'] ."<hr>";
    }
}
else
    {
        echo "Nothing found in db";
    }

mysqli_close($conn);