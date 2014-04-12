<!DOCTYPE html>
<html>
<head>
    <link href="l5.css" text="text/css" rel='stylesheet' />

</head>
<body>
    <h1>Count Example 02</h1>
    count to: 1,2,5,10 
    <a href="?goto=1">1</a>
    <a href="?goto=5">5</a>
    <a href="?goto=10">10</a>
    <a href="?goto=15">15</a>
    <a href="?goto=20">20</a>
    <a href="?goto=25">25</a>
    <a href="?goto=30">30</a>
    <br/>
    
    <?php
        
        $step = 1;
        if(isset($_GET["goto"]))
            $step = $_GET["goto"];
        
        for($i = 0; $i<1000; $i+=$step)
        {
            echo "<div> $i </div>";
        }
    ?>


</body>
</html>