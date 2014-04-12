<!DOCTYPE html>
<html>
    
    <head>
        <style>
            tbody td {
                border:dashed 1px green;
            }
            thead td {
                border:dashed 1px silver;
                font-size:110%;
                text-align:center;
                height:25px;
                width:50px;
            }
            * {
                font-size:10pt;
                font-family:verdana;
                text-align:center;
                height:25px;
            }
            caption {
                font-size:150%;
                font-weight:bold;
            }
        </style>
    </head>
    
    <body>
        <table>
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
                <?php $x=1; while($x<5) { ?>
                    <tr>
                        <td><?php echo $x ?></td>
                        <td><?php echo $x *2?></td>
                        <td><?php echo $x *3?></td>
                        <td><?php echo $x *4?></td>
                        <td><?php echo $x *5?></td>
                        <td><?php echo $x *6?></td>
                        <td><?php echo $x *7?></td>
                        <td><?php echo $x *8?></td>
                        <td><?php echo $x *9?></td>
                        <td><?php echo $x *10?></td>
                        <td><?php echo $x *11?></td>
                        <td><?php echo $x *12?></td>
                    </tr>
                    <?php $x++; } ?>
            </tbody>
        </table>
    </body>

</html>