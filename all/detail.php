<?php
	include("includes/db.php");
?>
<!--
-->
	<?php require_once './includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">


<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href='img/logo vk.png' rel='shortcut icon'>
    <title>Victory Kids</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet"> 

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
				<div>
				<a class="navbar-brand page-scroll" href="http://victorykids.store"><img src="img/VKLOGO.png" height="40" width="50"></a>
				</div>
			</div>
        </div>
        <!-- /.container-fluid -->
    </nav>


<section id="portfolio" class="bg-light-gray">
<!-- //breadcrumbs -->
<?php
$result=mysql_query("SELECT * FROM barang where ID='$_GET[id]'");
$data = mysql_fetch_array($result);
?>
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-2 agileinfo_single_left">
					<img id="example" src="<?php echo $data['Gambar']; ?>" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 agileinfo_single_right">
				<h3><?php echo $data['Nama']; ?></h3>
					
					<div class="w3agile_description">
						<h4>Deskripsi :</h4>
						<p class="ket"><?php echo $data['Keterangan']; ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h5><b>Harga :</b></h5>
							<p class="wrn">Rp. <?php echo $data['Harga'];?>,-</p>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="index.php" method="post">
								<fieldset>
									<p><input type="submit"  value="Back Menu" class="button"></p>
								</fieldset>
							</form>
						</div>
				</div>
				<?php  ?>
					</div>
					
				</div>
										
					
			</div>
				
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
</section>
<!-- new -->

<!-- //footer -->
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Victory Kids 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <!--<li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>-->
                        <li><a href="https://www.facebook.com/groups/426451037558401/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
</body>
</html>