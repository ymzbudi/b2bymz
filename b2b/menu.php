
<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama</title>
	<link rel="stylesheet" href="css/menu.css">
</head>
<body>
<!-- Menu Utama -->
<div class="menu">
	<ul class="navbar">
	<?php if($user_sedang_login == true) {
	echo '<li><a href="index.php?p=home" >Home</a>';
}
if($user_sedang_login == true) {
	if($hak_akses >= 3) {
		echo '<li><a href="index.php?p=menu1" >menu1</a> ';
	}
}

if($user_sedang_login == true) {
	if($hak_akses >= 2) {
		echo '<li><a href="index.php?p=menu2" >menu2</a>  ';
	}
} 

if($user_sedang_login == true) {
	if($hak_akses == 10) {
		echo '<li><a href="index.php?p=catatan_login" >Catatan Login</a> ';
	}
}

if($user_sedang_login == true) {
	echo '<li><a href="logout.php" >Logout</a> '; 
    echo '<br>(<b>'.$datauserlogin[2]["nama"].'</b>)</br>'; 
} ?>

	</ul>

</div>
</body>
</html>