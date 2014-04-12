<!DOCTYPE html>
<html>
    <style>
        * {
            font-family: comic sans ms;
        }
        div {
            border:solid 1px black;
            width:100px;
            height:100px;
            float: left;
            font-size:50px;
        }
    </style>
    
    <body>
        <h1>counter by</h1>
        <?php 
        $start=0;
        $end=100;
        $step=1; 
        
        $a=isset($_GET["start"]); 
        $b=isset($_GET["end"]); 
        $c=isset($_GET["step"]); 
        
        if($a and $b and $c) 
        { 
            $start=$_GET["start"]; 
            $end = $_GET["end"];
            $step = $_GET["step"];
        } 
        ?>
            <form>
                <label>Start</label>
                <input id='start' type='text' name='start' value=<?php echo($start) ?>>
                <label>End</label>
                <input id="end" type="text" name="end" value=<?php echo($end)?>>
                <br />
                <label>Count By</label>
                <input id='step' type='text' name='step' value=<?php echo($step)?>>
                <input type="submit" value="ok">
            </form>
            <?php 
            
                for($i=$start ; $i <= $end; $i+=$step) 
                {
                   
                
                    echo "<div>" . $i . "</div>";
                }
            ?>
    </body 
    </html>
