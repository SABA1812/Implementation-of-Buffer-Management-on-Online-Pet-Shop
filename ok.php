<?php
  
   
   
  $fp = fopen('data/cart/item.txt', 'w');
  fwrite($fp, '');
  $fp = fopen('data/cart/price.txt', 'w');
  fwrite($fp, '');
   

  
//header("Location:index.php");




 
 

 


 
?>
<?php
  
  $i = 0;
  $k = 0;
  $name = array();
  $price = array();
  $myfile = fopen("data/cart/item.txt", "r") or die();
  while(!feof($myfile)) {
    $name[$i] =fgets($myfile); 
    $i++;    
  }
$total = 0;
  $myfile = fopen("data/cart/price.txt", "r") or die();
  while(!feof($myfile)) {
    $price[$k] =fgets($myfile);    
    $p = (int)$price[$k];
    $total +=$p;
    $k++;
  }


 
?>

<!DOCTYPE html>
<html>
<title>Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div style="background-image: url(https://i1.wp.com/www.westside.social/wp-content/uploads/2017/12/food-background-food-concept-with-various-tasty-fresh-ingredients-for-cooking-italian-food-ingredients-view-from-above-with-copy-space_1220-1491-2-e1513108150131.jpg?ssl=1);background-size: cover;height: 500px;" class="">
    <br><br><br><br><br><br><br><br><br><br><h1 class="w3-text-white w3-center">Online Food Delivery</h1>
  </div>
  
</header>
<div class="w3-bar w3-black">
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="all.php" class="w3-bar-item w3-button w3-mobile">All Product</a>
  <a href="search.php" class="w3-bar-item w3-button w3-mobile">Search</a>
  <a href="cart.php" class="w3-bar-item w3-button w3-mobile">Cart</a>
  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About us</a>
</div>

<div class="w3-padding">
<h2 class="w3-center"><br>Thank you </h2>
<p class="w3-center">Your order id is : <b><?php $r = rand(1000,100000); echo $r;?></b></p>
<center><a href="index.php" class="w3-button w3-orange w3-text-white ">Go to home</a></center>


</div>

</body>
</html> 

 