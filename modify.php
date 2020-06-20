<?php
 
  $a = 0;
  $b = 0;
  $d = 0;
  $c = 0;
  $e=0;
  $fd=0;
  $vd=0;
  $pettype = array();
  $petid = array();
  $petbreed = array();
  $foodbrand = array();
  $accessory = array();
  $data = array();
  $datafixed = array();
  
  $myfile = fopen("data/item/pettype.txt", "r") or die();
  while(!feof($myfile)) {
    $pettype[$a] =fgets($myfile); 
    $a++;    
  }

  $myfile = fopen("data/item/petid.txt", "r") or die();
  while(!feof($myfile)) {
    $petid[$b] =fgets($myfile);    
    $b++;
  }

  $myfile = fopen("data/item/petbreed.txt", "r") or die();
  while(!feof($myfile)) {
    $petbreed[$c] =fgets($myfile);    
    $c++;
  }

  $myfile = fopen("data/item/foodbrand.txt", "r") or die();
  while(!feof($myfile)) {
    $foodbrand[$d] =fgets($myfile);    
    $d++;
  }
  $myfile = fopen("data/item/accessory.txt", "r") or die();
  while(!feof($myfile)) {
    $accessory[$e] =fgets($myfile);    
    $e++;
  }


 


 
?>

<!DOCTYPE html>
<html>
<title>MODIFY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

  <style>
    .test1{
      color:blue;
      font-size:85px;
      font-style:italic;
    font-stretch:expanded;
    text-align-last: center;
    }.test2{
      color:black;
      font-size: 35px;
    text-align-last: center;
    }
    /* Navbar container */ 
.navbar {
  overflow: hidden;
  background-color:grey;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #993333;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
  </style>
  <title></title>
</head>
  <body style="background-image: url(img/pup6.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    <body style="background-image: url(img/pup6.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    
<div class="navbar">
  <a href="p.html">HOME</a>
  <!--a href="display.php">DISPLAY</a>
  <a href="search.php">SEARCH</a>
  <!a href="p2.html"></a->
  <a href="modify.php">DELETE</a-->
</div>
</header>
<div class="w3-row w3-padding">
	<div class="w3-col l6"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>DELETE PAGE </u></h1><br><br>
		<?php 
			for($j = 0;$j<$a-1;$j++)
				{ ?>
					<div class="w3-card w3-padding">
						<h4>
							<?php echo $petid[$j]  ?>
						</h4>
						<p>foodbrand : <?php echo $foodbrand[$j]  ?></p>
						<p>pettype : <?php echo $pettype[$j]  ?></p>
						<!--a href="edit.php?id=$j">Edit</a>&nbsp;-->
            <a href="delete2.php?id=<?php echo $j; ?>">Delete</a>
            
					</div>
		<?php 
				} 
		?>
	</div>
</div>


</body>
</html> 
