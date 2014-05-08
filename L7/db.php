<?php

$con=mysqli_connect("127.12.44.129","satuday","","consultants");

$result = mysqli_query($con, "select * from people");

while($row = mysqli_fetch_array($result)){
    print_r($row);
    echo "<hr />";
    echo $row['titleid'] , " " , $row[0] ;
    echo "<hr />";
}

mysqli_close($con);
?>