<?php 

// Memuat konfigurasi 
include("konfigurasi.php");


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>B2B System </title>
<style type="text/css" >

<link rel="stylesheet" href="css/style.css">

</style>
</head>
<body>

<!-- Menu -->
<ul class="navbar"> 
<?php 
include("menu.php");
?>
</ul>


<?php 

// Membaca variable p dalam URL 

if(isset($_GET['p'])) {
	if(strlen($_GET['p']) == 0) {
		$p = "login"; 
	} else {
		$p = $_GET['p']; 
	} 
} else { 
	$p = "login"; 
} 

// Memuat file 

if(file_exists($p . ".php")) {
	include($p . ".php"); 
} else {
	echo "Halaman tidak ditemukan.";
}

?>

<!-- Footer -->
<br/>

<div style="text-align:center;" >
Yamazaki Indonesia B2B System
</div>


<center>
	<?php echo $waktu_server; ?>
</center>

</body>
</html>