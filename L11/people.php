<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Education - home</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="mainPan">   
  <?php include "include-left-menu.php" ?>
  <div id="rightPan">
  	
	<?php include "include-header.php" ?>
		
    <div id="bodyPan">
	    <?php
	        function formatk($money)
	        {
	            $returnMoney = (int)($money/1000);
	            return $returnMoney . "K";
	        }
	    
	    
	    $sql = "select * from People";
	    $wildCardCrt = "";
	    $type = 5;
	    if(isset($_GET["type"]))
	        $type = $_GET["type"];
	    else if(isset($_GET["wildCard"]))
	        $wildCardCrt = $_GET["wildCard"];
	    
	    $wildCard = $sql . " where lastName like '%$wildCardCrt%'";
	    
	    switch ($type)
	    {
	        case 1:
	            $sql .=" where currentSalary > 100000";
	            break;
	        case 2:
	            $sql .= " where currentSalary > 50000";
	            break;
	        case 3:
	            $sql .= " where gender = 'F'";
	            break;
	        case 4:
	            $sql .= " where gender = 'M'";
	            break;
	    }
	    
	    if($wildCardCrt)
	    {
	        $sql = $wildCard;
	    }
	    

	   ?>
	
	
		<h2>people/title/salaries</h2>
		<br />
		<?php
            $i = 1;
            $genderClass = "peoples-name";
            $con=mysqli_connect("127.6.40.1","satuday","","Consultants");
            
            $result = mysqli_query($con, $sql);
            $pos = 0;
            while($row = mysqli_fetch_array($result)){
              
                $lastName = $row['lastName'];
                $firstNamt = $row['firstName'];
                $genderClass = $row['gender'] == "F" ? "peoples-name-female":"peoples-name";
                $salary = (int)($row['currentSalary']/1000);
                
                $str = $salary > 86 ? "K*" : "K";
                
                $uTag = str_ireplace($wildCardCrt , "<u>" . $wildCardCrt . "</u>", $lastName);

                
            ?>
                <div class="<?php echo $genderClass ?>">
                    <a class="report" href="people-detail.php?peopleId=<?php echo $i ?>">
                        <?php echo $i .") " . $uTag . ", " . $firstNamt ." " . $salary . $str ?> </a>
                </div>
            <?php
            $i++;
            }
            
            
            
            mysqli_close($con);
        ?>
		
	  <div id="bodylowerPan">
		  <div id="bodylowerLeftPan">
		  	<h3>People</h3>
			<p>Online Education is a free, tableless, W3C-compliant web design layout by Template World. 
			This template has been tested and proven compatible with all major browser environments and
			operating systems. You are free to modify the design to suit your tastes in any way you like.</p>
			<ul class="list">
				<li><a href="#">Lorem ipsum dolor sit amet,consectetuer</a></li>
				<li><a href="#">adipiscing elit.Morbifert urna dui,posuere.</a></li>
				<li><a href="#">convallis vitae,</a></li>
			</ul>
			<p class="more"><a href="#">view more</a></p>
		  </div>
		  
		  <div id="bodylowerRightPan">
		  	<h4>search:</h4>
			<ul>
				<li><a href="?type=1">100,000 or greater</a></li>
				<li><a href="?type=2">50,000 or greater</a></li>
				<li><a href="?type=3">Display All Female Employees</a></li>
				<li><a href="?type=4">Display All Male Employees</a></li>
				<li class="lastlink"><a href="?type=5">All Employees </a></li>
			</ul>
			<p class="more"><a href="#">People List</a></p>
		  </div>
		</div>
	</div>
	</div>
  </div>
  <?php include "include-footer.php" ?>  
 </body>
</html>