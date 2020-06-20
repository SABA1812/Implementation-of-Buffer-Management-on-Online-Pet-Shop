<?php
/* 
  
  $i = 0;
  $k = 0;
  $name = array();
  $price = array();
  $myfile = fopen("data/item/name.txt", "r") or die();
  while(!feof($myfile)) {
    $name[$i] =fgets($myfile); 
    $i++;    
  }

  $myfile = fopen("data/item/price.txt", "r") or die();
  while(!feof($myfile)) {
    $price[$k] =fgets($myfile);    
    $k++;
  }

*/
 
?>
<!DOCTYPE html>
<html> 
<title>Search</title>
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
  <title>SEARCH</title>
</head>
  <body style="background-image: url(img/pup4.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    <body style="background-image: url(img/pup4.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    
<div class="navbar">
<a href="p.html">HOME</a>
  <!--a href="display.php">DISPLAY</a>
  <a href="search.php">SEARCH</a>
  <!-a href="p2.html"></a->
  <a href="modify.php">MODIFY</a-->
</div><br>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ENTER THE PET TYPE TO BE SEARCHED</h1>
<br><br>
   
</header>
<!--div class="w3-bar w3-black">
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="all.php" class="w3-bar-item w3-button w3-mobile">All Product</a>
  <a href="search.php" class="w3-bar-item w3-button w3-mobile">Search</a>
  <a href="cart.php" class="w3-bar-item w3-button w3-mobile">Cart</a>
  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About us</a>
</div-->


<div class="w3-padding">
<center>
  <div class="w3-container w3-half w3-margin-top">
    <form action="result.php" method="get" class="w3-container w3-card-4">
      <p>
      <input class="w3-input" type="text" name="q" style="width:100%"  required>
      <label>Pet TYPE</label></p>
      <p>
      <button type="submit" class="w3-button w3-section w3-orange w3-text-white w3-ripple"> Search </button>
      </p>
    </form>
  </div>
</center>
</div>

</body>
</html> 

