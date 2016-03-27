<?php
	if($_SESSION['level'] == 1){
?>
		<li>
			<a href="?page=du"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Daftar User</a>
		</li>
		<li>
			<a href="?page=dt"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Daftar Tempat</a>
		</li>
		<li>
			<a href="?page=vp"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Verifikasi Pembayaran</a>
		</li>
<?php		
	}else if($_SESSION['level'] == 2){
?>
		<li>
			<a href="?page=jp"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Jadwal Booking</a>
		</li>
<?php				
	}else if($_SESSION['level'] == 99){
?>
		<li>
			<a href="?page=du"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Daftar User</a>
		</li>
		<li>
			<a href="?page=dt"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Daftar Tempat</a>
		</li>
		<li>
			<a href="?page=jp"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Jadwal Booking</a>
		</li>
		<li>
			<a href="?page=vp"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Verifikasi Pembayaran</a>
		</li>
<?php		
	}
?>
