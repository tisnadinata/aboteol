<html lang="en" >
<?php
	include 'config.php';
	if(isset($_SESSION['idUser']) AND isset($_SESSION['level'])){
?>
<head>
	<title>Aplikasi Booking Olahraga</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/simple-sidebar.css">
	<link rel="stylesheet" href="css/style.css">

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="img/log2.png"/>
</head>
<body>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
					<img src="img/user.png" alt="..." class="img-rounded" style="width:85%;margin:20 0 20 0;">
                </li>
                <?php
					require_once 'menu.php';
				?>
                <li>
                    <a href="?page=pn"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Pengaturan</a>
                </li>
                <li>
                    <a href="member/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp&nbsp&nbsp&nbsp Keluar</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div >
                    <div class="col-lg-12">
						<?php
							if(isset($_GET['page'])){
								$page = $_GET['page'];
								switch($page){
									case 'home' : require_once 'home.php';break;
									case 'du' : require_once 'file/daftarUser.php';break;
									case 'dt' : require_once 'file/daftarTempat.php';break;
									case 'jp' : require_once 'file/jadwalPemesanan.php';break;
									case 'vp' : require_once 'file/verifikasiPembayaran.php';break;
									case 'pn' : require_once 'file/pengaturan.php';break;
									case 'kl' : require_once 'member/logout.php';break;
									default : require_once 'home.php';break;
								}
							}else{
								require_once 'home.php';
							}
						?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
<?php
	}else{
		refresh("member/index.php",0);
	}
?>
</html>