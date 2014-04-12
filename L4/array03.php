<!DOCTYPE html>
<html>
<head>
    <style>
        .myTable {
            border:solid 1px black;
        }
    </style>

</head>
<body>
    <h1>The number of cars in the array. </h1>
    <ul>
    <?php
        $carDic["cadallac"] = 35000;
        $carDic["Nissan"] = 27000;
        $carDic["Mini Cooper"] = 22000;
        $carDic["Lexus"] = 57000;
        $carDic["Porche"] = 127000;
        $carDic["Volve"] = 47000;
        $carDic["BMW"] = 67000;
        $carDic["Range Rover"] = 87000;
        $carDic["Toyota"] = 27000;
        
        
        $count = count($carDic);
        echo $count;

    ?>
    <ul>
    <?php
        $mostExpansive = max($carDic);
        
        echo "The most expensive car is " . $mostExpansive . ".";
    
    ?>
    
    
</body>
</html>