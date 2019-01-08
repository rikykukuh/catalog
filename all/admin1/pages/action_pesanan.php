<?php
include "../../includes/db.php";
error_reporting(E_ALL ^ E_NOTICE);

    if ($_POST[status]=='Lunas'){
      mysql_query("UPDATE barang,order_detail SET barang.stok=barang.stok-order_detail.kuantitas WHERE barang.nobar=order_detail.nobar and order_detail.id_orders='$_POST[id]'");
      mysql_query("UPDATE orders SET status='$_POST[status]' WHERE id_order='$_POST[id]'");
      echo '<script language="javascript">alert("Status Berhasil Diubah"); document.location="pesanan.php";</script>';
    }
	  elseif($_POST[status]=='Batal'){
      mysql_query("UPDATE barang,order_detail SET barang.stok=barang.stok+order_detail.kuantitas WHERE barang.nobar=order_detail.nobar and order_detail.id_orders='$_POST[id]'");
      mysql_query("UPDATE orders SET status='$_POST[status]' WHERE id_order='$_POST[id]'");
      echo '<script language="javascript">alert("Status Berhasil Diubah"); document.location="pesanan.php";</script>';
	  }
	
    else{
      mysql_query("UPDATE orders SET status='$_POST[status]' WHERE id_orders='$_POST[id]'");
      echo '<script language="javascript">alert("Status Berhasil Diubah"); document.location="pesanan.php";</script>';
    }
?>
