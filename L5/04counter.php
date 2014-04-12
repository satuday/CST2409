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
    
    ?>
    <h1>Counter Example 03</h1>
    <form>
        <label>Start</label>
        <input id="txtStart" name="txtStart" type="text" value="<?php echo $start ?>" />
        <label>Increment By</label>
        <input id="txtIncrementBy" name="txtIncrementBy" type="text" value="<?php echo $step ?>" />
        <label>End With</label>
        <input id="txtEndWith" name="txtEndWith" type="text" value="<?php echo $limit ?>" />
        <input type="button" value="Count" onclick="helloword()"/>
    </form>
    
    <?php
    
        for($i = $start; $i<$limit; $i+=$step)
        {
            echo "<div> $i </div>";
        }
    ?>
</body>
</html>
<script>
    function helloword(){
        alert("submited.");
        document.forms[0].submit();
    }
</script>