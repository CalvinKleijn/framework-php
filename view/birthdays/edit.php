<?php
    foreach ($getUsers as $getUser) {
?>

<form method="POST" action="../editSave/<?php echo $getUser['id'] ?>">
	<h1>Voornaam:</h1>
	<p><input type="text" name="persoon" value="<?php echo $getUser['person'] ?>"></p>
	<h1>Geboortedag:</h1>
	<p><input type="number" name="dag" value="<?php echo $getUser['day'] ?>"></p>
	<h1>Geboortemaand:</h1>
	<p>Vul je maand in als getal:<br>
	1= januari, 2= februari, 3= maart, 4= april, 5= mei, 6= juni, 7= juli, 8= augustus, 9= september, 10= oktober, 11= november, 12= december</p>
	<p><input type="number" name="maand" value="<?php echo $getUser['month'] ?>"></p>
	<h1>Geboortejaar:</h1>
	<p><input type="number" name="jaar" value="<?php echo $getUser['year'] ?>"></p>
	<br>
	<button type="change" name="change">Aanpassen</button>
</form>

<?php
    }
?>
