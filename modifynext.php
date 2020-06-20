<?php
if($_POST)
{
  $check = 1;
  /*  POST Data */
  $petid = $_POST["petid"];
  $pettype = $_POST["pettype"];
  $petbreed = $_POST["petbreed"];
$accessory = $_POST["accessory"];
  $foodbrand = $_POST["foodbrand"];
  /*  POST Data */
    
  $myfile = fopen("data/item/petid.txt", "r") or die();

  while(!feof($myfile)) {
    $temp =fgets($myfile); 
    

      if(strcmp($temp, ''.$petid.''.PHP_EOL) == 0)
    {
        $check = 0;
      break;
    }

  }

  if($check == 1){

  $data = ''.$petid.''.PHP_EOL;
  $fp = fopen('data/item/petid.txt', 'a');
  fwrite($fp, $data);

  fclose($fp);


  $data = ''.$pettype.''.PHP_EOL;
  $fp = fopen('data/item/pettype.txt', 'a');
  fwrite($fp, $data);

  fclose($fp);


  $data = ''.$petbreed.''.PHP_EOL;
  $fp = fopen('data/item/petbreed.txt', 'a');
  fwrite($fp, $data);

  fclose($fp);

  $data = ''.$accessory.''.PHP_EOL;
  $fp = fopen('data/item/accessory.txt', 'a');
  fwrite($fp, $data);

  fclose($fp);


  $data = ''.$foodbrand.''.PHP_EOL;
  $fp = fopen('data/item/foodbrand.txt', 'a');
  fwrite($fp, $data);

  fclose($fp);

  }
  else
  {
    echo '<script>alert("Already !!!")</script>';
  }





}
/*sharanya*/
$count=0;
  extract($_REQUEST);
  $file=fopen("data.txt","a");
  if (!empty($petid)) {
  $petid = $petid;
  fwrite($file,$petid."|");
}
if (!empty($pettype)) {
  $pettype = $pettype;
  fwrite($file,$pettype."|");
}
if (!empty($petbreed)) {
  $petbreed = $petbreed;
  fwrite($file,$petbreed."|");
}
if (!empty($accessory)) {
  $accessory = $accessory;
  fwrite($file,$accessory."|");
}
if (!empty($foodbrand)) {
  $foodbrand = $foodbrand;
  fwrite($file,$foodbrand."\n");
}

fclose($file);
  $file=fopen("primedata.txt","r");
  while (! feof($file)) {
     # code...
   $str=fgets($file);
   if($str=="")
    break;
   $count=$count+1;
  }

  fclose($file);
  $file=fopen("primedata.txt","a");
  if (!empty($petid)) {
  $petid = $petid;
  fwrite($file,$petid."|");
  fwrite($file,$count."\n");
  }
  fclose($file);
  $file=fopen("secdata.txt","a");
  if(!empty($petid))
  {
    $petid=$petid;
    fwrite($file,$petid."|");
  }
  if(!empty($pettype))
  {
    $pettype=$pettype;
    fwrite($file,$pettype."\n");
  }

   
/*modified for fixed length*/
$count=0;
$j=0;
  extract($_REQUEST);
  $file=fopen("datafixed.txt","a");
  if (!empty($petid)) {
  $petid = $petid;
  fwrite($file,$petid."|");
  $j=strlen($petid);
}
if (!empty($pettype)) {
  $pettype = $pettype;
  fwrite($file,$pettype."|");
  $j=$j+strlen($pettype);
}
if (!empty($petbreed)) {
  $petbreed = $petbreed;
  fwrite($file,$petbreed."|");
   $j=$j+strlen($petbreed);
}
if (!empty($accessory)) {
  $accessory = $accessory;
  fwrite($file,$accessory."|");
   $j=$j+strlen($accessory);
}
if (!empty($foodbrand)) {
  $foodbrand = $foodbrand;
  fwrite($file,$foodbrand."|");
   $j=$j+strlen($foodbrand);
}
 if($j!=0)
 {
 for ($i=$j; $i<100;$i++)
  {
  fwrite($file,"|");
  }
fwrite($file,"\n");
 }



?>

 
 <!DOCTYPE html>
<html>
<title>ADD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

  <style>
    .test1{
      color:blue;
      font-size:55px;
      
    font-stretch:expanded;
    text-align-last: left;
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
  <title>ADD</title>
</head>
  <body style="background-image: url(img/rab1.jpg);
      padding-top:0px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
      
    <body style="background-image: url(img/rab1.jpg);
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
</head>
<body style="background-image: url(img/rab1.jpg);
      padding-top:10px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
   
<div class= "f">
<form method = "post" action="">
   
  <!--&nbsp;&nbsp;&nbsp;<b><h4 class="test1">INSERT DATA:<br></h4--><br><br><br>
    <h1><a href="delete2modify.php?id=<?php echo $j; ?>">MODIFY</a></h1>
 <!-- &nbsp;&nbsp;&nbsp;<label for="petid"><b>ENTER PET ID:</label><br>
  &nbsp;&nbsp;&nbsp;<input type="text" id="petid" name="petid" value=""><br><br>
  
  &nbsp;&nbsp;&nbsp;<label for="pettype"><b>ENTER PET TYPE:</label><br>
  &nbsp;&nbsp;&nbsp;<input type="text" id="pettype" name="pettype" value=""><br><br>

  &nbsp;&nbsp;&nbsp;<label for="petbreed">ENTER PET BREED:</label><br>
  &nbsp;&nbsp;&nbsp;<input type="text" id="petbreed" name="petbreed" value=""><br><br>

    &nbsp;&nbsp;&nbsp;<label for="accessory">ENTER ACCESSORY:</label><br>
  &nbsp;&nbsp;&nbsp;<input type="text" id="accessory" name="accessory" value=""><br><br>

  &nbsp;&nbsp;&nbsp;<label for="foodbrand">ENTER FOODBRAND:</label><br>
  &nbsp;&nbsp;&nbsp;<input type="text" id="foodbrand" name="foodbrand" value=""><br><br>

 
  &nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">
</form>

<<button><b>SUBMIT</button> -->
   </div>   

</body>
</html>
