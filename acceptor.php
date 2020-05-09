<?php


$name2=$_GET['name2'];
$initial2=$_GET['initial2'];
$final2=$_GET['final2'];
$phone2=$_GET['phone2'];
$times2=$_GET['times2'];
$x2=$_GET['x2'];
$dates2=$_GET['dates2'];


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'uhack');

$p="insert into acceptor(name2,initial2,final2,phone2,times2,x2,dates2) values('{$name2}','{$initial2}','{$final2}','{$phone2}','{$times2}','{$x2}','{$dates2}')";
$i=mysqli_query($con,$p);
echo $i;

$q="select * from acceptor";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?>
<table width="400px" border="2px" cellpadding="3px" bgcolor="lightblue">
<tr>

	<th>name</th>
	<th>initial</th>
	<th>final</th>
	<th>phone no</th>
	<th>time</th>
	<th>am/pm</th>
	<th>date</th>
</tr>
<?php
for($i=0;$i<$num;$i++)
{?>
<?php $row=mysqli_fetch_array($result); ?>

<tr>
	<td> <?php echo $row['name2']; ?> </td>
	<td> <?php echo $row['initial2']; ?> </td>
	<td> <?php echo $row['final2']; ?> </td>
	<td> <?php echo $row['phone2']; ?> </td>
	<td> <?php echo $row['times2']; ?> </td>
	<td> <?php echo $row['x2']; ?> </td>
	<td> <?php echo $row['dates2']; ?> </td>
	
	</tr>
	
<?php
}
?>	

</table>

<?php mysqli_close($con); ?>

