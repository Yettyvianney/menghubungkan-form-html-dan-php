<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body >
	<table  width="100%" bgcolor='khaki'>
		<tr>
			
				<center><h1><font color="sandy brown">SELAMAT DATANG </h1> <h3> DI RUMAH KITA</h3></center></font>
			
		</tr>
		<tr>
			<td width="50%">
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul>
				<li>
					<a href="beranda.html">
						Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					Menu Ke Ketiga
				</li>
			</ul>
			</td>
			<td>
			<b><u>LIST PENGGUNA</u></b><br>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM login1');
				?>
				<table border="1">
					
					<tr bgcolor='browns'>

						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
						<td>
							<b>
							Aksi
							</b>
						</td>
					</tr>

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['nama'];
					echo"</td><td>";
					echo $row['katasandi'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?apanih=".$row['nama']."		'>hapus</a>
					";

				}
			?>
			</table>
			<br>
			<button style="background-color:brown"><a  href="tambah_pengguna.php"><font color="beige">Tambah Pengguna</font></a></button>
			</td>
		</tr>
	</table>
</body>
</html>