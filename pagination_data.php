
<!-- Le code qui servira à récupérer la data correspondante au numéro de page 
sélectionnée   -->
<?php
include_once("db_connect.php");
$per_page = 5;
if($_GET) {
	$page=$_GET['page'];// on récupere le numéro de la page envoyé à travers
						//Le lien	
}
//formule pour avoir le offset pour lequel on debute la récupération
$start = ($page-1)*$per_page;

$sql = "select * from employee order by id limit $start,$per_page";
$result = mysqli_query($conn, $sql);
?>
<!-- On interprete le résultat, et on l'affichesous forme de lignes de tableau -->
<table class="table table-bordered">
<?php
while($row = mysqli_fetch_array($result))       
{
	$id=$row['id'];
	$emp_name=$row['employee_name'];
	$employee_salary=$row['employee_salary'];
	$employee_age=$row['employee_age'];
	?>	
	<tr >
	<td>&nbsp;<?php echo $id; ?></td>
	<td><?php echo $emp_name; ?></td>
	<td><?php echo $employee_salary; ?></td>
	<td><?php echo $employee_age; ?></td>
	</tr>
<?php
}
?>
</table>