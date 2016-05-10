<?php 


// Untuk mengakses halaman ini, harus login 
if(!$user_sedang_login) {
	echo "Belum Login.";
	exit; 	
} 

// Atur hak akses user, untuk halaman ini. 
// Halaman ini bisa diakses oleh semua user sbb :  
if($hak_akses >= 3) {
	// Lanjut 
} else {
	echo "Tidak ada hak akses.";
	exit; 	
} 

?>


<h1>Jeruk</h1>

<p>
Halaman Jeruk.<br>
Halaman ini <u>bisa diakses oleh user, dengan hak akses >= 3</u>. <br>
<span style="background-color:#FF9;" >Hak akses user yang sedang login adalah <b><?php echo $hak_akses; ?></b></span>.
</p>

<br/>
<br/>
<br/>