<html>
<head>

<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
<header>



<?php


$name=$_GET['name'];
$initial=$_GET['initial'];
$final=$_GET['final'];
$phone=$_GET['phone'];
$times=$_GET['times'];
$x=$_GET['x'];
$dates=$_GET['dates'];


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'uhack');

$p="insert into donor(name,initial,final,phone,times,x,dates) values('{$name}','{$initial}','{$final}','{$phone}','{$times}','{$x}','{$dates}')";
mysqli_query($con,$p);

$q="select * from donor";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?><center>
<div class="dtd">
<table width="400px" border="2px" cellpadding="3px" id="dt" >
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
	<td> <?php echo $row['name']; ?> </td>
	<td> <?php echo $row['initial']; ?> </td>
	<td> <?php echo $row['final']; ?> </td>
	<td> <?php echo $row['phone']; ?> </td>
	<td> <?php echo $row['times']; ?> </td>
	<td> <?php echo $row['x']; ?> </td>
	<td> <?php echo $row['dates']; ?> </td>
	
	</tr>
	
<?php
}
?>	

</table>
</div>
<?php mysqli_close($con); ?>

</header>
	</body>
	</html>