<?php 
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Importation des liens vers les bibs qu'on va utiliser -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<title>TP1 Pagination</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery_pagination.js"></script>
<link rel='stylesheet' href='style.css' type='text/css' />
<div class="container">
<h2>TP1 Pagination - Ghelani</h2>
<!-- Récupération de la data via la bdd -->
<!-- Dans ce cas on a crée une seule table employée -->
	<?php
	// Requete sql pour récuperer la data
	$per_page = 5;
	$sql = "SELECT id, employee_name, employee_salary, employee_age FROM employee";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	// On calcule le nb de page sachant qu'on a pris le choix d'afficher 5 elts par page
	$pages = ceil($count/$per_page)
	?>			
	
	<div id="content"></div>
	<div id="pagination">
		<ul class="pagination">
		<?php
		//La liste des boutons chaque boutons est identifié par un id= numéro de la page
		// Qui va nous servira à envoyer la requete sql via la fonction défini dans jquery_pagination.js
		
		for($i=1; $i<=$pages; $i++)
		{
			echo '<li id="'.$i.'">'.$i.'</li>';
		}
		?>
		</ul>
	</div>			
</div>
</div>
</body></html>
