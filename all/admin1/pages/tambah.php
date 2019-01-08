<!DOCTYPE html>
<?php
// sertakan berkas utama
require_once '../../includes/db.php';
require_once 'authv2.php';

if (empty($_SESSION['admin'])) {
?>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="./css/style2.css" />
</head>
<body>
<div id="wrapper">

	<form name="login-form" class="login-form" action="" method="post">

		<div class="header">
		<h1>Admin page access.</h1>
		<span>Please login.</span>
		</div>

		<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" autofocus />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" /></div></form><br>
		</div>
	<!--/form-->

</div>
<div class="gradient"></div>
</body>
</html>
<?php
die;
}
 $nama = $_POST['Nama'];
 $img=$_POST['Gambar'];
 $harga=$_POST['Harga'];
 $keterangan=$_POST['Keterangan'];

if(isset($nabar) or isset($deskripsi)or isset($jenis) or isset($harga) or isset ($stok) or isset($berat))
{

 if(($_FILES["file"]["type"] == "image/jpeg") and ($_FILES["file"]["size"] <= 2000000)){
     if (file_exists("upload/" . $_FILES["file"]["name"])){
       echo $_FILES["file"]["name"] . " already exists. ";
       }else{
       move_uploaded_file($_FILES["file"]["tmp_name"],"../../img/" . $_FILES["file"]["name"]);
	   // Resize Image
	   $filePath = "../../img/" . $_FILES["file"]["name"];
       $orig_image = imagecreatefromjpeg($filePath);
       $image_info = getimagesize($filePath);
       $width_orig  = $image_info[0]; // current width as found in image file
       $height_orig = $image_info[1]; // current height as found in image file
       $width = 400; // new image width
       $height = 300; // new image height
       $destination_image = imagecreatetruecolor($width, $height);
       imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
       // This will just copy the new image over the original at the same filePath.
       imagejpeg($destination_image, $filePath, 100);
       $insert = "INSERT INTO barang SET Gambar = 'img/".$_FILES["file"]["name"]."',Nama = '$nama',Keterangan = '$keterangan',Harga = '$harga'";
       $query = mysql_query($insert);
       if($query == TRUE)
       {
        	echo '<script language="javascript">alert("Data berhasil Ditambahkan"); document.location="./index.php";</script>';
       }
       else
       {
      echo '<script language="javascript">alert("Data gagal Ditambahkan"); document.location="./index.php";</script>';
       }
     }
   }
}
 ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Sushihan - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylenavbar.css" type="text/css">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <div class="topnav">
            <a href="logout.php">Logout</a>
    </div>

        <div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
				            <table width="100%">
							 <tr>
							     <td align="left"><h3>Tambah Data Baju</h3></td>
                                 <td align="right"><a href="index.php"><i class="fa fa-book" aria-hidden="true"></i> Daftar Baju</a></td></tr></table>
                         </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" action="tambah.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Baju</label>
                                            <input class="form-control" name = "Nama" required >
                                        </div>
										<div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" rows="6" name = "Keterangan" required></textarea>
                                        </div>
										 <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name = "Harga" required >
                                        </div> 
								        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name = "file" id="file" required>
                                        </div>
																				
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <a href = "./index.php" button type="reset" class="btn btn-default">Cancel</a></button>
                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
