<link href="addon.css" rel="stylesheet" type="text/css" />
<?php 
    function select($menuItem){
        $whichMenu = "home";
        if(isset($_GET["menu"])){
            $whichMenu = $_GET["menu"];
        }
        
        if($whichMenu == $menuItem)
            return "selected";
            
        return "";
    
    }




?>


  <div id="leftPan">
  	<ul class="one">
		<li class="<?php echo select('home') ?>"><a href="home.php?menu=home">Home</a></li>
		<li class="<?php echo select('aboutus') ?>"><a href="aboutus.php?menu=aboutus">about us</a></li>
		<li class="<?php echo select('services') ?>"><a href="services.php?menu=services">services</a></li>
		<li class="<?php echo select('University') ?>"><a href="services.php?menu=University">University</a></li>
		<li class="<?php echo select('books') ?>"><a href="services.php?menu=books">books</a></li>
		<li class="<?php echo select('Discount') ?>"><a href="services.php?menu=Discount">Discount</a></li>
		<li class="<?php echo select('release') ?>"><a href="services.php?menu=release">release</a></li>
		<li class="<?php echo select('contact') ?>"><a href="services.php?menu=contact">contact</a></li>
	</ul>
	<div id="fastformPan">
	<form action="" method="get" class="formone">
		<h2>search</h2>
  	  <select name="category" id="category"><option>CATAGORY</option></select>
		
	  <select name="author" id="author"> <option>AUTHOR</option></select>
	  <label>English</label>
	  <input name="search" type="radio" class="check" value="search" />
	  <label>French</label>
	   <input name="search" type="radio" class="check" value="French" />
	   <div id="submitPan">
	   <input type="submit" class="input" value="SEARCH" />
	   </div>
	</form>
	</div>
	<h3>new books</h3>
	<ul class="two">
		<li><a href="#">Loremipsum sit</a></li>
		<li><a href="#">Ametcon</a></li>
		<li><a href="#">Adipiscing elit </a></li>
		<li><a href="#">Morbifert urnadui </a></li>
		<li><a href="#">Posuereac</a></li>
		<li><a href="#">Convallis vitae</a></li>
	</ul>
	<div id="secondformPan">
		<form action="" method="post" class="formtwo">
			<h2>newsletter</h2>
			<input name="" type="text" />
			<input name="" type="submit" class="input" value="SUBMIT" />
		</form>
	</div>
  </div>