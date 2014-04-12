<!DOCTYPE html>
<html>
<head>
    <link href="L6.css" text="text/css" rel='stylesheet' />

</head>
<body>
    <?php
        function get($limit, $input){
            if(isset($_GET[$input]))
                $limit = $_GET[$input];
            return $limit;
        }
        
        
        $start = get(1, "txtStart");
        $limit = get(500, "txtEndWith");
        $step = get(1, "txtIncrementBy");
    
    ?>
    <h1>Counter Example 03</h1>
    <form>
        <label>Start</label>
        <input id="txtStart" name="txtStart" type="text" value="<?php echo $start ?>" />
        <label>Increment By</label>
        <input id="txtIncrementBy" name="txtIncrementBy" type="text" value="<?php echo $step ?>" />
        <label>End With</label>
        <input id="txtEndWith" name="txtEndWith" type="text" value="<?php echo $limit ?>" />
        <input type="button" value="Count" onclick="validateForm()"/>
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
    function validateElement(id){
        var startP = document.getElementById(id);
        if(isNaN(startP.value)){
            alert("New one the text entered is invalid.");
            startP.selected();
            return false;
        }
        return true;
        
    }
    
    function validateForm(){
        if(validateElement("txtStart") &&
        validateElement("txtIncrementBy") &&
        validateElement("txtEndWith"))
            document.forms[0].submit();
    }
</script>