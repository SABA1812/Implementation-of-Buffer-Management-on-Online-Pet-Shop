<?php
 
  
  $i = 0;
  $k = 0;
  $petid = array();
  $pettype = array();
  $myfile = fopen("data/item/petid.txt", "r") or die();
  while(!feof($myfile)) {
    $petid[$i] =fgets($myfile); 
    $i++;    
  }

  $myfile = fopen("data/item/pettype.txt", "r") or die();
  while(!feof($myfile)) {
    $pettype[$k] =fgets($myfile);    
    $k++;
  }


 
?>
<!DOCTYPE html>
<html>
<title>Result</title>
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
  <title>DISPLAY</title>
</head>
  <body style="background-image: url(img/pup7.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    <body style="background-image: url(img/pup7.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    
<div class="navbar">
  <a href="p.html">HOME</a>
  <!--a href="display.php">DISPLAY</a>
  <a href="search.php">SEARCH</a>
  <!-a href="p2.html"></a->
  <a href="modify.php">MODIFY</a-->
</div><br><br><br>

<div class="w3-row-padding w3-padding">
  <h2>All Products</h2>
  <?php   
  for($j = 0;$j<$i-1;$j++)
  {
  ?>
  <div class="w3-col l2 ">
    <div class="w3-card w3-padding">
       <h4>PET ID:<?php echo $petid[$j];  ?></h4>
       <h4>PET TYPE:<?php echo $pettype[$j];  ?> </p>  
       <a class="w3-btn w3-orange w3-text-white" href="add_cart.php?id=0">Add to Cart</a>
    </div>
  </div>
  <?php 
  }
  ?>
</div>

 
</body>
</html> 
