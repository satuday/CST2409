<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Education - home</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include "sql.php" ?>
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
	    $sql = "select projectName, budget from project";
	   ?>
	
	
		<h2>Project</h2>
		<br />
		<?php
            $i = 1;
            $genderClass = "title-name";

            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result)){
              
                $projectName = $row['projectName'];
                $budget = formatK($row['budget']);
            ?>
                <div class="<?php echo $genderClass ?>">
                    <a class="report" href="people-detail.php?peopleId=<?php echo $i ?>">
                        <?php echo $i .") " . $projectName . " - " . $budget ?> </a>
                </div>
            <?php
            $i++;
            }
            
            
            
            mysqli_close($con);
        ?>
		
	  <div id="bodylowerPan">
		  <div id="bodylowerLeftPan">
		  	<h3>Title</h3>
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
			<p class="more"><a href="#">Title List</a></p>
		  </div>
		</div>
	</div>
	</div>
  </div>
  <?php include "include-footer.php" ?>  
 </body>
</html>