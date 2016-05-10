<?php 



// Untuk mengakses halaman ini, harus login 
if(!$user_sedang_login) {
	echo "Belum Login.";
	exit; 	
} 

// Atur hak akses user, untuk halaman ini. 
// Halaman ini bisa diakses oleh semua user login 
if($hak_akses > 0) {
	// Lanjut 
} else {
	echo "Tidak ada hak akses.";
	exit; 	
} 

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>


<h1>Home</h1>

<p>
Selamat datang. <br/>
Halaman ini <u>bisa diakses oleh semua user login</u>. 
</p>

<p>
Informasi User yang sedang login (Anda) : 
</p>

<table border="1" cellpadding="4" cellspacing="0">
  <tr >
    <td>ID User</td>
    <td><?php echo $datauserlogin[2]['id_user']; ?></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><b><?php echo $datauserlogin[2]['username']; ?></b></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $datauserlogin[2]['nama']; ?></td>
  </tr>
  <tr bgcolor="#FFFF99">
    <td>Hak Akses</td>
    <td><?php echo $datauserlogin[2]['hak_akses']; ?></td>
  </tr>
  <tr >
    <td>Waktu Login</td>
    <td><?php echo $datauserlogin[2]['waktu_login']; ?></td>
  </tr>
  <tr>
    <td>Waktu Kadaluarsa Login</td>
    <td><?php echo $datauserlogin[2]['waktu_kadaluarsa']; ?></td>
  </tr>
  <tr>
    <td>IP Address</td>
    <td><?php echo $datauserlogin[2]['ip']; ?></td>
  </tr>
  <tr>
    <td>PC dan Browser</td>
    <td><?php echo $datauserlogin[2]['pc_dan_browser']; ?></td>
  </tr>
</table>
</body>
</html>
