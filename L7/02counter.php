<!DOCTYPE html>
<!-- File Name: 04.counter.php --> 
<html>
	<head>
		<title> </title>
	    <link rel="stylesheet" type="text/css" href="L7.css">		
	</head>
<body>
	<h1>Counter Example 04</h1>	
	<?php
	

$con=mysqli_connect("127.6.40.1","satuday","","Consultants");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	   $limit = 1000;
	   if ( isset($_GET["txtEndWith"]) ){
			$limit = $_GET["txtEndWith"];
	   }	   
	   $increase = 1;
	   if ( isset($_GET["txtIncrementBy"]) ){
			$increase = $_GET["txtIncrementBy"];
	   }	 

	   $startWith = 0;
	   if ( isset($_GET["txtStart"]) ){
			$startWith = $_GET["txtStart"];
	   }	 
	   
	   $highLight = 0;
	   if ( isset($_GET["txtHighLight"]) ){
			$highLight = $_GET["txtHighLight"];
	   }
	   
	   function highLight($highLightNo, $current){
	        $numbers = explode(",", $highLightNo);
	        foreach($numbers as $currentNumber){
	            if($currentNumber == 0)
	                return "";
	            if($current % $currentNumber == 0){
	                return "highLight";
	            }
	        }
	       return "";
	   }
	   
	?>	
	<form>
		<label>Start:</label>
				<input name="txtStart" 
					   id="start"
					   type="text" value="<?php echo $startWith ?>" />
			
		<label>Increment By:</label>
				<input name="txtIncrementBy" 
					   id="incrementBy"
			           type="text" value="<?php echo $increase ?>" />
			
		<label>End With:</label>
				<input name="txtEndWith" 
				        id="endWith"
			            type="text" value="<?php echo $limit ?>" />
			            
		<label>HighLight:</label>
				<input name="txtHighLight" 
				        id="highLight"
			            type="text" value="<?php echo $highLight ?>" />
		
		<input type="button" value="Count" onclick="helloWorld()" />		
	</form>
	<hr />	
	<?php for ($i=$startWith; $i<=$limit; $i = $i + $increase)
	{
	    $mark = highLight($highLight, $i);
		echo "<div class=' $mark ' >$i</div>";
	}
	?>	
	<script>
		 function helloWorld(){
			alert("You are about to submit data");
			document.forms[0].submit();		
		 }	
	</script>
	
</body>
</html>