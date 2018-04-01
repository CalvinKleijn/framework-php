<form class="text" method="POST" action="createSave">
	<h1>Voornaam:</h1>
	<input required type="text" name="persoon">
	<h1>Geboortedag:</h1>
	<input required type="number" min="1" max="31" name="dag">
	<h1>Geboortemaand:</h1>
	<p>Vul je maand in als getal:<br>
	1= januari, 2= februari, 3= maart, 4= april, 5= mei, 6= juni, 7= juli, 8= augustus, 9= september, 10= oktober, 11= november, 12= december</p>
	<input required type="number" min="1" max="12" name="maand">
	<h1>Geboortejaar:</h1>
	<input required type="number" name="jaar">
	<br>
	<br>
	<button type="create" name="create">Toevoegen</button>
</form>


