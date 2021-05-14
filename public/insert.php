<!doctype html>
<?php
include ('../includes/settings.php');
include ('../includes/functions.php');
if(! isset( $_POST['submit'] ) ){
	
$mobname= $_POST["mobileName"];
$compName= $_POST["companyName"];
$price= $_POST["price"];
$modelNumber= $_POST["modelNumber"];
$productDate= $_POST["productDate"];

$picTmpName=$_FILES["picturePath"]["tmp_name"];
$picSize=$_FILES["picturePath"]["size"];
$picType=$_FILES["picturePath"]["type"];
$picName=$_FILES["picturePath"]["name"];
$picturePath="picture/$modelNumber/$modelNumber"."--"."$picName";
$_POST['picturePath']= $picturePath;
$picfol="picture/$modelNumber";
$mk="";

$db = new DB();


if (!file_exists ( $picfol )) {
	$mk=mkdir($picfol);
	$ersal0= alertTemplate('!گوشی ثبت شد', 'success');
	}


		

if ( $mk>0)
{
	copy($picTmpName,$picturePath);
	$ersal0= alertTemplate('!گوشی ثبت شد', 'success');
	Product::add($_POST);
}

else{
		
		
		$ersal0 = alertTemplate('!عملیات با موفقیت انجام نشد. این گوشی از قبل ثبت شده است', 'error');
		if( isset($ersal0) )	
		echo($ersal0);
	
}


					unset( $db );

	


}
?>


<html lang="fa" dir="rtl">
	<head>
		<title>آکادمی | افزودن محصول</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<link href = "style.css" rel = "stylesheet">
		<style>
		</style>
	</head>
	<body class = "container">
		<header></header>
		<main>
			<?php
				if( isset($alert) && isset($ersal0) )
					echo $alert , $ersal0;
					
			?>
		</main>
		<aside></aside>
		<footer></footer>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>