<?php
$konek=mysqli_connect("localhost","root","","db_yetty");
if($konek){
		// echo "berhasill";
	}else{
		echo '<script>window.alert("tidak terkoneksi")</script>'; 
	}