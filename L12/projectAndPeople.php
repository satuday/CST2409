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
	   ?>
	   
		<h2>Project and People</h2>
		<br />
		<?php
			$sql = "select projectName, lastName, currentSalary/2000 as hourlywage from people T1 
	        inner join projectAssignments as T2 on T1.peopleId = T2.peopleId inner join project as 
	        T3 on T2.projectId = T3.projectId";
            
            $i = 1;
            $genderClass = "title-name";

            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result)){
              
                $projectName = $row['projectName'];
                $lastName = $row['lastName'];
                $hourlywage = money_format('$%i', $row['hourlywage']);
            ?>
                <div class="<?php echo $genderClass ?>">
                    <a class="report" href="people-detail.php?peopleId=<?php echo $i ?>">
                        <?php echo $i .") " . $projectName . ", " . $lastName . ", " . $hourlywage ?> </a>
                </div>
            <?php
            $i++;
            }
            
            $unionSql = "select avg(currentSalary) as moneyInfo, 'Avg (F) Salary' as description from people where gender = 'f'
            union
            select avg(currentSalary) as moneyInfo, 'Avg (M) Salary' as description from people where gender = 'm'
            union
            select avg(currentSalary) as moneyInfo, 'Avg Salary' as description from people
            union
            select max(currentSalary) as moneyInfo, 'Max (F) Salary' as description from people where gender = 'f'
            union
            select max(currentSalary) as moneyInfo, 'Max (M) Salary' as description from people where gender = 'm'
            union
            select max(currentSalary) as moneyInfo, 'Max Salary' as description from people ";
            
            $result = mysqli_query($con, $unionSql);
            
            
            
            
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
		  	<h4>Summery:</h4>
			<ul>
			<?php
			    while($row = mysqli_fetch_array($result)){
			        
			        echo "<li><a href='#'>" . $row['description']. " is " . formatk($row['moneyInfo']) . "</a></li>";
			        
			    }
			
			?>
			 <!--   <li><a href="?type=1">100,000 or greater</a></li>-->
			 <!--   <li><a href="?type=1">100,000 or greater</a></li>-->
			 <!--   <li><a href="?type=1">100,000 or greater</a></li>-->
				<!--<li><a href="?type=2">50,000 or greater</a></li>-->
				<li><a href="?type=3">Female Employees</a></li>
				<li><a href="?type=4">Male Employees</a></li>
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