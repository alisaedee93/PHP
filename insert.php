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
$picPath="../picture/$modelNumber/$modelNumber"."--"."$picName";
$picfol="../picture/$modelNumber";


$con1= mysqli_connect("localhost","root","","mydb");

	if(mysqli_connect_errno($con1)>0)
	{
		echo("<font size='5' color= 'red' > ارور در ارتباط به پایگاه داده</font>");
		return;
	}




   $re= mysqli_query($con1,"insert into mobile values('$compName','$mobname','$modelNumber',$productDate,'$picPath',$price);");
	   
	   	if($re>0)
	{       
			
				
			$mk=mkdir($picfol);
			
			if($mk>0)
			{
				copy($picTmpName,$picPath);
				echo("<font size='5' color='green' > فایل ارسال شد</font>");
				
				
			}
			
			else{
				echo("<font size='5' color='red' > عملیات با موفقیت انجام نشد. فولدری با این اسم وجود دارد</font>");

				return;
			}
		
			
			
			
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