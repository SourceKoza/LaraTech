<?php
mysql_connect('172.16.10.22', 'sampatti', 'clsdir') or die("database can't connect");
mysql_select_db('db_emp1634') or die("database can't select");

$date=$_REQUEST['name'];


$query = "select * from grdetails where grdate='$date'";
$result = mysql_query($query);
?><table class='table table-striped'>
<tr><th>GR Number</th><th>Advance</th><th>Balence</th><th>Action</th></tr>
<?
while($row = mysql_fetch_array($result))
{?>

<tr><td><?php echo  $row['grnumber'];?></td>
<td><?php echo $row['advance']?></td>
<td><?php echo $row['balence']?></td>
<td><button class="btn btn-primary"   index="<?php echo $row['id']?>">Show</button></td>

</tr>

<?
}?>
</table>

