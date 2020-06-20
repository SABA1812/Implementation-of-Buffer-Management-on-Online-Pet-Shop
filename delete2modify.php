<?php
 if($_GET)
 {
  $id = $_GET["id"];

  $a = 0;
  $b = 0;
  $d = 0;
  $c = 0;
  $petid = array();
  $data = array();
   $datafixed = array();
   

  $t = 0 ;
  $fp = fopen('data/item/temp.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("data/item/petid.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
     
        $data = $temp;
        $fp = fopen('data/item/temp.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("data/item/temp.txt","data/item/petid.txt");


  $t = 0 ;
  $fp = fopen('data/item/temp.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("data/item/foodbrand.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
 
        $data = $temp;
        $fp = fopen('data/item/temp.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("data/item/temp.txt","data/item/foodbrand.txt");



  $t = 0 ;
  $fp = fopen('data/item/temp.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("data/item/pettype.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
    
        $data = $temp;
        $fp = fopen('data/item/temp.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("data/item/temp.txt","data/item/pettype.txt");




  $t = 0 ;
  $fp = fopen('data/item/temp.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("data/item/accessory.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
    
        $data = $temp;
        $fp = fopen('data/item/temp.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("data/item/temp.txt","data/item/accessory.txt");




  $t = 0 ;
  $fp = fopen('data/item/temp.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("data/item/petbreed.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
    
        $data = $temp;
        $fp = fopen('data/item/temp.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("data/item/temp.txt","data/item/petbreed.txt");

$t = 0 ;
  $fp = fopen('temp.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("data.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
    
        $data = $temp;
        $fp = fopen('temp.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("temp.txt","data.txt");

 $t = 0 ;
  $fp = fopen('temp2.txt', 'w');
  fwrite($fp, '');
  $myfile = fopen("datafixed.txt", "r") or die();
  while(!feof($myfile)) {
    $temp  =fgets($myfile);
      if($id != $t)
      {
    
        $data = $temp;
        $fp = fopen('temp2.txt', 'a');
        fwrite($fp, $data);
      }
      $t++;
       
  }
  copy("temp2.txt","datafixed.txt");
  
header("Location:modifynext2.php");




 
 
 
 }

 


 
?>

<!DOCTYPE html>
<html>
<title>DELETE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<header class="w3-container w3-teal">
  <h1>Modify Data</h1>
</header>
<div class="w3-row w3-padding">
  <div class="w3-col l6">
     
  </div>
</div>


</body>
</html> 
