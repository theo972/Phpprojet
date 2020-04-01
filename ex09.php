<html>
<head>
	<title>Achetez des timbres, envoyez courriez, colis, blablabla</title>
	<meta charset="utf-8">
	<meta name="language" content="fr">
	<meta name="description" content="Accueil">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<header>
		<div class="Main-Menu">
			<div id="Left-Menu">
				<div style="width: unset; height: 2.6vw;">
					<a href=""><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/0/0d/La_Poste_logo.svg/1200px-La_Poste_logo.svg.png"></a>
				</div>
				<div id="Roll-Menu">
					<div class="rolls">
						<a href="">ABC</a>
					</div>
					<div class="rolls">
						<a href="">DEF</a>
					</div>
					<div class="rolls">
						<a href="">GHI</a>
					</div>
					<div class="rolls">
						<a href="">JKL</a>
					</div>
					<div class="rolls">
						<a href="">MNO</a>
					</div>
					<div class="rolls">
						<a href="">PQR</a>
					</div>
				</div>
			</div>
			<div id="Right-Menu">
				<li><a href="#Exercices">Exercices</a></li>
				<li><a href="#Algo">Algo</a></li>
				<li><a href="#BDD">Base De Données</a></li>
				<li><a href="#LaPoste">La Poste</a></li>
			</div>
		</div>
	</header>
	<section>
		<div class="test">
			<div id="Exercices" class="text">

				<form method="POST" action="#">
					<?php
						require "ex09/convertIntToBin.php";

						$form = new convertIntToBin();
						$form->getInputText("number","Number");
	                    $form->getInputSubmit("submit","Submit");
	                    echo "</br>";

                        if(!empty($_POST)){
                        	$form->checking($_POST["number"]);
                    	}
					?>	
				</form>

			</div>
		</div>
	</section>
	<footer>
	</footer>
</body>
</html>