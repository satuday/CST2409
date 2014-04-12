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
	   if ( isset($_GET["highLight"]) ){
			$startWith = $_GET["highLight"];
	   }
	   
	   function highLight($highLightNo, $current){
	        if($highLightNo == 0)
	            return "";
	            
	        if($current % $highLightNo == 0){
	            return "highLight";
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
		echo "<div class='' >$i</div>";
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