<!doctype html>
<?php
$mobname= $_POST["mobileName"];
$compName= $_POST["companyName"];
$price= $_POST["price"];
$modelNumber= $_POST["modelNumber"];
$productDate= $_POST["productDate"];

$picTmpName=$_FILES["picturePath"]["tmp_name"];
$picSize=$_FILES["picturePath"]["size"];
$picType=$_FILES["picturePath"]["type"];
$picName=$_FILES["picturePath"]["name"];
$picPath="../picture/$modelNumber"."$picName";


$con1= mysqli_connect("localhost","root","","mydb");

	if(mysqli_connect_errno($con1)>0)
	{
		echo("<font size='5' color= 'red' > ارور در ارتباط به پایگاه داده</font>");
		return;
	}




   $re= mysqli_query($con1,"update mobile set companyName='$compName' , mobileName='$mobname' , model='$modelNumber',productDate= $productDate, picturePath='$picPath', price=$price where model='$modelNumber'; ");
	   
	   	if($re>0)
	{
			copy($picTmpName,$picPath);
		echo("<font size='5' color='green' > عملیات با موفقیت انجام شد</font>");
		
	}
		else{
			echo("<font size='5' color='red' > عملیات با موفقیت انجام نشد</font>");
		}
         mysqli_close($con1);


?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>