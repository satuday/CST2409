<!DOCTYPE html>
<html>

<style>
*{
font-family: comic sans ms;
}

div{
border:solid 1px black;
width:100px;
height:100px;
float: left;
font-size:50px;
}

</style>

<body>
<h1>counter</h1>

<?php
$range = 30;
$isSet = isset($_GET["i"]);

if($isSet)
{
$range = $_GET["i"];
}

?>
<form>
<input type="text" name="i" value=<?php echo($range) ?>>
<input type="submit" value="ok">
</form>

<?php



for($i = 0; $i <= $range; ++$i)

echo("<div> $i </div>");

?>
</body
</html>

