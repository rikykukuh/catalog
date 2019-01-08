<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
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
		<h1>Admin sushihan page access.</h1>
		<span>Please login.</span>
		</div>

		<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" autofocus />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" /></form><br>
		</div>

	<!--/form-->

</div>
<div class="gradient"></div>
</body>
</html>
<?php
die;
}

ob_start();
if(isset($_GET['edit2_id']))
{
 $qry = "SELECT * FROM ukuran WHERE id_ukuran=".$_GET['edit2_id'];
 $result = mysql_query($qry);
 $row = mysql_fetch_array($result);
  // variables for input data
 $nama_ukuran = $_POST['nama_ukuran'];
 $harga = $_POST['harga'];
 $img=$_POST['tipe'];
 $stok=$_POST['stok'];


if(isset($_FILES['file']['name']))
{
$filename = $_FILES['file']['name']; // Get the name of the file (including file extension).
$filename = str_replace(' ', '_', $filename); // Replace space with underscore.
$filename = str_replace("'", '`', $filename); // Replace ' with `.
$filename = $filename; // Get final file name.
move_uploaded_file($_FILES["file"]["tmp_name"],"../../image/" .$filename);

if(!empty($filename)){
// Resize Image
$filePath = "../../image/" .$filename;
$orig_image = imagecreatefromjpeg($filePath);
$image_info = getimagesize($filePath);
$width_orig  = $image_info[0]; // current width as found in image file
$height_orig = $image_info[1]; // current height as found in image file
$width = 150; // new image width
$height = 150; // new image height
$destination_image = imagecreatetruecolor($width, $height);
imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
// This will just copy the new image over the original at the same filePath.
imagejpeg($destination_image, $filePath, 100);
}

if(empty($filename)){
$img=$row['image'];
}
else{
$img="image/".$filename;
}
}

 {
 if($_SERVER["REQUEST_METHOD"] == "POST")

 {
     $sqlAdd ="update ukuran set nama_ukuran='".$nama_ukuran."',
	 harga='".$harga."',
     image='".$img."',
	 stok='".$stok."'
     where id_ukuran=".$_GET['edit2_id'];
     $query = mysql_query($sqlAdd);
	 if($query == TRUE)
       {
         error_reporting(E_ALL ^ E_WARNING);
         echo '<script language="javascript">alert("Ukuran berhasil di Update"); document.location="./ukuran.php";</script>';
       }
       else
       {
         error_reporting(E_ALL ^ E_WARNING);
         echo '<script language="javascript">alert("Ukuran gagal di update"); document.location="./ukuran.php";</script>';
       }
     exit;
    }

 }
}

   ob_end_flush();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin - Edit Menu</title>
<link rel="stylesheet" href="./css/custom.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Edit Menu Ukuran</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td>Nama Ukuran :<input type="text" name="nama_ukuran" placeholder="Nama Ukuran" value="<?php echo $row['nama_ukuran']; ?>" required /></td>
    </tr>
    <tr>
    <td>Harga Ukuran :<input type="text" name="harga" placeholder="Harga Ukuran" value="<?php echo $row['harga']; ?>" required /></td>
    </tr>
	<tr>
    <td>Stok :<input type="text" name="stok" placeholder="Stok" value="<?php echo $row['stok']; ?>" required /></td>
    </tr>
    <tr>
	<input type="file" name="file" value="" />*Gambar Harus Berformat JPEG
	</td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <a href="./ukuran.php" class="button">Cancel</a></strong>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
