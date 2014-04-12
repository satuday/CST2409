<!DOCTYPE html>
<html>
<head>
    <link href="l5.css" text="text/css" rel='stylesheet' />

</head>
<body>
    <?php
        $start = 0;
        if(isset($_GET["txtStart"]))
            $start = $_GET["txtStart"];
            
        $limit = 1000;
        if(isset($_GET["txtEndWith"]))
            $limit = $_GET["txtEndWith"];
            
        $step = 1;
        if(isset($_GET["txtIncrementBy"]))
            $step = $_GET["txtIncrementBy"];
        
        $highLightNumbers = 0;    
        if(isset($_GET["highLight"]))
        {
            $highLightNumbers = $_GET["highLight"];
            $numbers = explode(",", $highLightNumbers);
        }
        
    
    ?>
    <h1>Counter Example 03</h1>
    <form>
        <label>Start</label>
        <input id="txtStart" name="txtStart" type="text" value="<?php echo $start ?>" />
        <label>Increment By</label>
        <input id="txtIncrementBy" name="txtIncrementBy" type="text" value="<?php echo $step ?>" />
        <label>End With</label>
        <input id="txtEndWith" name="txtEndWith" type="text" value="<?php echo $limit ?>" />
        <label>HighLight</label>
        <input id="highLight" name="highLight" type="text" value="<?php echo $highLightNumbers ?>"/>
        <input type="submit" />
    </form>
    
    <?php
        $class = "";
        for($i = $start; $i<$limit; $i+=$step)
        {

                for ($j = 0; $j < count($numbers); $j++) 
                {

                    if (is_numeric($numbers[$j]) and $i % $numbers[$j] == 0) 
                    {
                        $class = "class='highLight'";
                        break;
                    }
                    else $class = "";
                }
            echo "<div $class> $i </div>";
        }
    ?>


</body>
</html>