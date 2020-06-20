 
 <!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<style>
		.test1{
      color:black; 
      font-size:55px;
      font-style:italic;
    font-stretch:expanded;
    text-align-last: center;
    background-color: white;
    }
		.f{
			color: black;
			text-align: center;
			font-size: 20px;


		}
		
	</style>
</head>
<body style="background-image: url(images/1.jpg);
      padding-top:10px;
      background-size:cover;
      background-position: center;background-attachment: fixed">
    <center> <h1 class="test1">INSERT RECORD</h1></center>
<div class= "f">
<form method = "post" action="">
  <label for="accno"><b>Enter Account no:</label><br>
  <input type="text" id="accno" name="accno" value=""><br><br>
  
  <label for="name"><b>Enter name:</label><br>
  <input type="text" id="name" name="name" value=""><br><br>
  <label for="mobno">Enter mobile no:</label><br>
  <input type="text" id="mobno" name="mobno" value=""><br><br>
  <label for="address">Enter address:</label><br>
  <input type="text" id="address" name="address" value=""><br><br>
  <label for="acctype">Enter account type:</label><br>
  <input type="text" id="acctype" name="acctype" value=""><br><br>
  <input type="submit" value="Submit" >
</form>

<!--<button><b>SUBMIT</button> -->
   </div>   

</body>
</html>
<?php

/*if((isset($_POST['accno'])) && (isset($_POST['name'])) && (isset($_POST['mobno'])) && (isset($_POST['address'])) && (isset($_POST['acctype'])))
{
  $Accno = $_POST['accno'];
  $Fname = $_POST['name'];
  $Mobno = $_POST['mobno'];
  $Addr = $_POST['address'];
  $Actype = $_POST['acctype'];
  $dfile = fopen('data.txt','a');
  fwrite($dfile,$Accno);
  fwrite($dfile,"|");
  fwrite($dfile,$Fname);
  fwrite($dfile,"|");
  fwrite($dfile,$Mobno);
  fwrite($dfile,"|");
  fwrite($dfile,$Addr);
  fwrite($dfile,"|");
  fwrite($dfile,$Actype);
  fwrite($dfile,"\n");
  fclose($dfile);
}*/
?>

<?php 
  $count=0;
  extract($_REQUEST);
  $file=fopen("data.txt","a");
  if (!empty($accno)) {
  $accno = $accno;
  fwrite($file,$accno."|");
}
if (!empty($name)) {
  $name = $name;
  fwrite($file,$name."|");
}
if (!empty($mobno)) {
  $mobno = $mobno;
  fwrite($file,$mobno."|");
}
if (!empty($address)) {
  $address = $address;
  fwrite($file,$address."|");
}
if (!empty($acctype)) {
  $acctype = $acctype;
  fwrite($file,$acctype."\n");
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
  if (!empty($accno)) {
  $accno = $accno;
  fwrite($file,$accno."|");
  fwrite($file,$count."\n");
  }

   

?>

