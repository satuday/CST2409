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
    
    <ul>
    <?php
        $cars=array("Volvo","BMW","Toyota","Honda","Nissan");
        $count = count($cars);
        for($i = $count-1; $i > -1; $i--)
        {
            echo "<li>" . $i . " " . $cars[$i] . "</li>";
        }
    ?>
    <ul>
</body>
</html>