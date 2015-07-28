<?
mysql_connect('172.16.10.22', 'sampatti', 'clsdir') or die("database can't connect");
mysql_select_db('db_emp1634') or die("database can't select");

$date=$_REQUEST['id'];


if(!empty($date))

{


$query = "select * from grdetails where id='$date'";
$result = mysql_query($query);
?>
<button type="button" class="close" data-dismiss="modal">&times;</button>
<table class='table table-striped'>
<?
while($row = mysql_fetch_array($result))
{?>

<tr><td><?php echo  $row['grnumber'];?></td>
<td><?php echo $row['advance']?></td>
<td><?php echo $row['balence']?></td>


</tr>

<?
}
}?>
</table>

