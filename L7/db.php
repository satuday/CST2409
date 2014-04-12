<?php

$con=mysqli_connect("127.6.40.1","satuday","","Consultants");

$result = mysqli_query($con, "select * from People");

while($row = mysqli_fetch_array($result)){
    print_r($row);
    echo "<hr />";
    echo $row['titleid'] , " " , $row[0] ;
    echo "<hr />";
}

mysqli_close($con);
?>