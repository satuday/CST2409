<!DOCTYPE html>
<html>
<head>
    <style>
        .myTable{
            border-collapse:collapse;
            font-family:verdana;
        }
        .myTable td {
            border:solid 1px black;
            padding:3px;
        }
        .highlight{
            color:red;
        }
        
    </style>

</head>
<body>

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
        //$mostExp["name"] = "";
        //$mostExp["price"] = 0;
        //$lestExp["name"] = "";
        //$lestExp["price"] = 99999999;
        
        $max = array_keys($carDic, max($carDic));
        $min = array_keys($carDic, min($carDic));
    
        /*foreach($carDic as $x=>$x_value){
            if($x_value > $mostExp["price"])
            {
                $mostExp["price"] = $x_value;
                $mostExp["name"] = $x;
            }
            if($x_value < $lestExp["price"])
            {
                $lestExp["price"] = $x_value;
                $lestExp["name"] = $x;
            }
        }*/
    ?>
    
    <table class='myTable'>
        <caption>Vehicles</catption>
        <thead>
            <tr>
            <td>Car</td><td>Price</td>
            <tr>
        </thead>
        <tbody>
    <?php

        $class = "";
        foreach($carDic as $x=>$x_value)
        {
            if($x == $max[0])
                $class = "class='highlight'";
            else 
                $class = "";
            echo "<tr $class > <td>  $x  </td><td>  $$x_value  </td><tr>";
        }
        
    ?>
        </tbody>
        <tfoot>
        
         <tr><td>Most Expansive car/price</td><td><?php echo $max[0] . "/$" . max($carDic) ?> </td></tr>
         <tr><td>Least Expansive car/price</td><td><?php echo $min[0] . "/$" . max($carDic) ?> </td></tr>
        </tfoot>
    </table>
    
</body>
</html>