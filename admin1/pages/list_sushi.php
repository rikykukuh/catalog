<?php
$sql_query="SELECT * FROM barang";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
	$no++
?>
		<tr>
		 <td align = "center"><img src = "../../<?php echo $row[2]; ?>"  width="80px" height="80px" ></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[4]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td align="center"><a href="javascript:edit1_id('<?php echo $row[0]; ?>')"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>&nbsp;<a href="javascript:delete1_id('<?php echo $row[0]; ?>')"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php
}
?>
