<?php include "sql.php" ?>

<?php


if(isset($_GET["peopleId"])){
    $peopleId = $_GET["peopleId"];
    echo $peopleId;
    
    $sql = "delete from people where peopleId=". $peopleId;
    $result = mysqli_query($con, $sql);
    
    mysqli_close($con);
}
?>