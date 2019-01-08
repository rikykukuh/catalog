<?php
$sql_query="SELECT * FROM orders ORDER BY id_order DESC";
$result_set=mysql_query($sql_query);
while($customers = mysql_fetch_array($result_set))
{
	$no++;
echo "		
			<td align=center>$no</td>
			<td>$customers[nama_penerima] </td>
	    <td>$customers[alamat_penerima]</td>
	    <td>$customers[telepon]</td>
			<td align=center>ORDER-$customers[id_order]</td>
			<td>$customers[tanggal]</td>
			<td>$customers[status]</td>
			<td><a href=pesanan_detail.php?id=$customers[id_order]>Detail</a></td>
		</tr>
";
}
?>
