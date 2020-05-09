
<html>
<head>

<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
<header>

<?php

$initials=$_GET['initials'];
$finals=$_GET['finals'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'uhack');

$q="select * from donor";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);?>
<center>
<div class="sd">
<table width="400px" border="2px" cellpadding="3px" style="border-radius:20px;" id="dt" >
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
	
	
	<?php if(($row['initial']==$initials)&&($row['final']==$finals)) 
	{?>
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
	}?>
<?php
}?>
	
	</table>
	<div>
	<?phpmysqli_close($con);?>
	</header>
	</body>
	</html>