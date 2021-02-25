<!doctype html>
<?php

$modelNumber= $_POST["modelNumber"];
$picPath="../picture/$modelNumber"."-";
$picfol="../picture/$modelNumber";


$con1= mysqli_connect("localhost","root","","mydb");

	if(mysqli_connect_errno($con1)>0)
	{
		echo("<font size='5' color= 'red' > ارور در ارتباط به پایگاه داده</font>");
		return;
	}




   $re= mysqli_query($con1,"delete from mobile where (model='$modelNumber');");
	   
	   	if($re>0)
	{       
			
				
			
			
			
			
				
				echo("<font size='5' color='green' > فایل پاک شد</font>");
				
				
			
			

		
			
			
			
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