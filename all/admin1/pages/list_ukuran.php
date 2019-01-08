<?php
$sql_query="SELECT * FROM ukuran";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
	$no++
?>
		<tr>
		<td align = "center"><?php echo $no; ?></td>
		<td align = "center"><image src = "../../<?php echo $row[1]; ?>"  width="80px" height="80px" ></td>
		<td ><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4];?></td>
		<td align="center"><a href="javascript:edit2_id('<?php echo $row[0]; ?>')"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>&nbsp;<a href="javascript:delete2_id('<?php echo $row[0]; ?>')"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php
}
?>
