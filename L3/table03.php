<!DOCTYPE html>
<html>
    
    <head>
        <style>
            tbody td {
                border:dashed 1px green;
                height:25px;
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
                <?php $numberOfRow=$_GET["rows"]; 
                    $x=1; 
                    while($x < $numberOfRow) {
                    echo "
                    <tr>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                    </tr>" 
                    $x++; } ?>
            </tbody>
        </table>
    </body>

</html>