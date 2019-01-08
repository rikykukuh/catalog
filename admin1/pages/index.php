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
// delete condition
if(isset($_GET['delete1_id']))
{
 $sql_query="DELETE FROM barang WHERE ID=".$_GET['delete1_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Sushihan</title>

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
 <script type="text/javascript">
      function edit1_id(ID)
      {
       if(confirm('Edit Data Barang ?'))
       {
        window.location.href='edit1.php?edit1_id='+ID;
       }
      }
      function delete1_id(ID)
      {
       if(confirm('Hapus Data Barang ?'))
       {
        window.location.href='index.php?delete1_id='+ID;
       }
      }
    </script>  
	
	<script type="text/javascript">
      function edit2_id(id_ukuran)
      {
       if(confirm('Edit Data Ukuran ?'))
       {
        window.location.href='edit2.php?edit2_id='+id_ukuran;
       }
      }
      function delete2_id(id_ukuran)
      {
       if(confirm('Hapus Data Ukuran ?'))
       {
        window.location.href='menu.php?delete2_id='+id_ukuran;
       }
      }
    </script> 
</head>

<body>
    <div class="topnav">
            <a href="logout.php">Logout</a>
    </div>
    <div id="wrapper">

        <div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
				            <table width="100%">
							 <tr>
							     <td align="left"><h3>Daftar Baju</h3></td>
                                 <td align="right"><a href="tambah.php"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Data Baju</a></td></tr></table>
                         </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="65px">Image</th>
                                            <th width="100px">Nama</th>
                                            <th>Deskripsi</th>
                                            <th width="90px">Harga</th>
                                            <th width="90px">Action</th>
                                        </tr>
                                    </thead>
									<?php include 'list_sushi.php'; ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            </div>
            <!-- /.row -->
        <!-- /#page-wrapper -->

            <!-- /.row -->
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>