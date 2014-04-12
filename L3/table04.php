<!DOCTYPE html>
<html>
    
    <head>
        <style>
            #myTable tbody td {
                border:dashed 1px green;
                height:50px;
                
            }
            #myTable thead td {
                border:dashed 1px silver;
                font-size:110%;
                text-align:center;
                height:25px;
                width:50px;
                background-color:#CCC;
            }
            *{
                font-size:10pt;
                font-family:verdana;
            }
            #myTable caption {
                font-size:150%;
                font-weight:bold;
            }
            .other{
                background-color:#999;
                color:#465;
            }
            .even{
                background-color:red;
                color:yellow;
            }
            .tri{
                background-color:green;
                color:orange;
            }
        </style>
    </head>
    
    <body>
        <table id='myTable'>
            <caption>Multiplication Table</caption>
            <thead>
                <tr>
                    <td>One</td>
                    <td>Two</td>
                    <td>Three</td>
                    <td>Four</td>
                    <td>Five</td>
                    <td>six</td>
                    <td>Seven</td>
                    <td>Eight</td>
                    <td>Nine</td>
                    <td>Ten</td>
                    <td>Eleven</td>
                    <td>Twelve</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $numberOfRow = $_GET["rows"];
                    $x=1;
                    while($x<$numberOfRow) { 
                    ?>
                    <tr >
                        <?php 
                            for($i = 1; $i <= 12; $i++)
                            {
                                /*$class = "";
                                if(($x * $i) % 2 == 0)
                                    $class = "class='even'";*/
                        ?> 
                                <td <?php echo highlight($x*$i) ?>> <?php echo $x * $i ?> </td>
                               
                        <?php        
                            }
                        ?>

                    </tr>
                    <?php $x++; } ?>
            </tbody>
        </table>
    </body>
</html>
<?php
    function highlight($number){
        $return = "";
        if($number % 2 == 0)
            $return = "class='even'";
        else if($number % 3 == 0)
            $return = "class='tri'";
        else
            $return = "class='other'";
        return $return;
    }

?>
