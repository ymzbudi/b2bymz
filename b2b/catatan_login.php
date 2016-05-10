<?php 

// Untuk mengakses halaman ini, harus login 
if(!$user_sedang_login) {
	echo "Belum Login.";
	exit; 	
} 

// Atur hak akses user, untuk halaman ini. 
// Halaman ini bisa diakses oleh semua user sbb :  
if($hak_akses == 10) {
	// Lanjut 
} else {
	echo "Tidak ada hak akses.";
	exit; 	
} 

?>


<h1>Catatan Login (Log)</h1>

Berikut ini ditampilkan 1000 catatan login terakhir : <br/> <br/> 


<table border="1" cellpadding="4" cellspacing="0">
  <tr>
    <th nowrap scope="col">ID Login</th>
    <th nowrap scope="col">Waktu Login</th>
    <th nowrap scope="col">Waktu Kadaluarsa</th>
    <th nowrap scope="col">ID User</th>
    <th nowrap scope="col">Username</th>
    <th nowrap scope="col">Hak Akses</th>
    <th nowrap scope="col">IP Address</th>
    <th nowrap scope="col">PC dan Browser</th>
    <th nowrap scope="col">Status Logout</th>
    <th nowrap scope="col">Aktif/Online</th>
  </tr>
<?php 

$sql_clogin = "

SELECT 

l.id AS id_login, 
l.waktu_login, 
l.waktu_kadaluarsa, 
l.id_user, 
u.username, 
u.hak_akses, 
l.ip,
l.pc_dan_browser, 
l.status AS ketstatus 

FROM login l 
LEFT JOIN user u ON l.id_user = u.id 

ORDER BY 
l.waktu_login DESC

LIMIT 1000; 

"; 

$query_clogin = mysql_query($sql_clogin); 

if(!$query_clogin) { 
	echo "Tidak berhasil query.";
	exit; 
	
} else { 

	while ($baris_clogin = mysql_fetch_assoc($query_clogin)) { 
	
	if($waktu_server <= $baris_clogin['waktu_kadaluarsa'] && $baris_clogin['ketstatus'] == '1') {
		$online = "Online";
		$bg = "#66FF99";
	} else {
		$online = "---";
		$bg = "#FFFFFF";
	}

?>

  <tr bgcolor="<?php echo $bg; ?>">
    <td nowrap ><?php echo $baris_clogin['id_login']; ?></td>
    <td nowrap ><?php echo $baris_clogin['waktu_login']; ?></td>
    <td nowrap ><?php echo $baris_clogin['waktu_kadaluarsa']; ?></td>
    <td nowrap ><?php echo $baris_clogin['id_user']; ?></td>
    <td nowrap ><?php echo $baris_clogin['username']; ?></td>
    <td nowrap ><?php echo $baris_clogin['hak_akses']; ?></td>
    <td nowrap ><?php echo $baris_clogin['ip']; ?></td>
    <td nowrap ><?php echo $baris_clogin['pc_dan_browser']; ?></td>
    <td nowrap >
	<?php 
	if($baris_clogin['ketstatus'] == '0') { 
		echo "Telah melakukan Logout"; 
	} else {
		echo "---"; 
	}
	
	?>
    </td>
    <td nowrap style="font-weight:bold;" ><?php echo $online; ?></td>
  </tr>
  
<?php 
	} 
} 
?> 
  
</table>

<br/>
<br/>
<br/>