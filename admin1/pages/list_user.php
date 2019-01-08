<?php
$sql_query="SELECT * FROM user";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
	$no++
?>
		<tr>
		<td align="center"><?php echo $no; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[5]; ?></td>

		</tr>
		<?php
}
?>
