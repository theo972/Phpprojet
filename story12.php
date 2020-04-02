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
						require "classes/autoform.php";
						require "classes/user.php";
						require "classes/request.php";
						$form = new autoform();
	                    $form->getInputText("name","Name");
	                    $form->getInputText("firstName","First Name");
	                    $form->getInputDate("birthDate","BirthDate");
	                    $form->getInputText("mail","Mail Adress");
						$arr = array("M", "F");
	                    $form->getUnputTypeList("gender", $arr);
	                    $form->getInputText("postalAdress","Postal Adress");
	                    $form->getInputSubmit("submit","Submit");
	                    echo "</br>";
                        if(!empty($_POST)){
                        	$user = new user($_POST["name"], $_POST["firstName"], $_POST["birthDate"], $_POST["mail"], $_POST["gender"], $_POST["postalAdress"]);
                        	echo $user->getName() . " ";
                        	echo $user->getFirstName(). " ";
                        	echo $user->getBirthDate(). " ";
                        	echo $user->getMail(). " ";
                        	echo $user->getGender(). " ";
                        	echo $user->getPostalAdress(). " ";
	                    	echo "<br>";
	                    	$dbh = new request("root", "", "test", "mysql", "localhost");
	                    	$dbh->setUser($user);
                    	}
					?>
				</form>

				
				<h2>EXERCICES</h2>
				<div>
					<h3>EXERCICE 3</h3>
					<!--<?php
						/**echo "<h4>T-REX vs PTERO</h4>";
						require "classes/dinosaur.php";
						require "classes/trex.php";
						require "classes/pterodactyl.php";
						$trex = new trex("T-REX", 300, 900, 400, "M", 27, 1);
						$pterodactyl = new pterodactyl("PTERO", 420, 680, 230, "F", 13);

						echo "Boomstick : IT'S TIME FOR A DEATH BATTLLLLLLLLLE !!!";

						if ($trex->getSizeArms() * $trex->getNbrArms() > $pterodactyl->getNbrWings() * $pterodactyl->getSizeWings()) {
							echo "<br>" . $trex->getName() . " is faster than " . $pterodactyl->getName();
						}
						else {
							echo "<br>" . $trex->getName() . " is slower than " . $pterodactyl->getName();
						}

						while ( $trex->getHealth() > 0 || $pterodactyl->getHealth() > 0) {

							$trex->makeSeism(false, $pterodactyl);

							if ($pterodactyl->getHealth() < 0) {
								echo "<br> KO";
								echo "<br> The T-REX wins.";
								break;
							}

							echo $pterodactyl->getName() . " has " . $pterodactyl->getHealth() . " Hp left !";

							$pterodactyl->makeTornado(true, $trex);

							if ($trex->getHealth() < 0) {
								echo "<br><br> KO";
								echo "<br> the PTERODACTYL wins.";
								break;
							}

							echo $trex->getName() . " has " . $trex->getHealth() . " Hp left !";
						}
						echo "<br> FATALITY";*/
					?>-->

					<!--<?php
						/*echo "<h4>T-REX vs T-REX</h4>";
						$trex = new trex("MARCO", 200, 400, 500, "M", 17, 1);
						$trex2 = new trex("TARMA", 120, 880, 330, "F", 13, 2);

						echo "Boomstick : IT'S TIME FOR A DEATH BATTLLLLLLLLLE !!!";

						if ($trex->getSizeArms() * $trex->getNbrArms() > $trex2->getNbrArms() * $trex2->getSizeArms()) {
							echo "<br>" . $trex->getName() . " is faster than " . $trex2->getName();
						}
						else {
							echo "<br>" . $trex->getName() . " is slower than " . $trex2->getName();
						}

						while ( $trex->getHealth() > 0 || $trex2->getHealth() > 0) {

							$trex->makeSeism(true, $trex2);

							if ($trex2->getHealth() < 0) {
								echo "<br> KO";
								echo "<br> The T-REX wins.";
								break;
							}

							echo $trex2->getName() . " has " . $trex2->getHealth() . " Hp left !";

							$trex2->makeSeism(true, $trex);

							if ($trex->getHealth() < 0) {
								echo "<br><br> KO";
								echo "<br> the T-REX 2 wins.";
								break;
							}

							echo $trex->getName() . " has " . $trex->getHealth() . " Hp left !";
						}
						echo "<br> FATALITY";
						*/
					?>-->

					<!--<?php
						/*echo "<h4>PTERO vs PTERO</h4>";
						$ptero = new pterodactyl("BASS", 160, 200, 100, "M", 15);
						$ptero2 = new pterodactyl("ZACK", 240, 180, 130, "F", 13);

						echo "Boomstick : IT'S TIME FOR A DEATH BATTLLLLLLLLLE !!!";

						if ($ptero->getSizeWings() * $ptero->getNbrWings() > $ptero2->getNbrWings() * $ptero2->getSizeWings()) {
							echo "<br>" . $ptero->getName() . " is faster than " . $ptero2->getName();
						}
						else {
							echo "<br>" . $ptero->getName() . " is slower than " . $ptero2->getName();
						}

						while ( $ptero->getHealth() > 0 || $ptero->getHealth() > 0) {

							$ptero->makeTornado(true, $ptero2);

							if ($ptero2->getHealth() < 0) {
								echo "<br> KO";
								echo "<br> The PTERO wins.";
								break;
							}

							echo $ptero2->getName() . " has " . $ptero2->getHealth() . " Hp left !";

							$ptero2->makeTornado(true, $ptero);

							if ($ptero->getHealth() < 0) {
								echo "<br><br> KO";
								echo "<br> the ptero 2 wins.";
								break;
							}

							echo $ptero->getName() . " has " . $ptero->getHealth() . " Hp left !";
						}
						echo "<br> FATALITY";*/
					?>-->
				</div>

			</div>
			<div id="Algo" class="text">
				<h2>ALGO</h2>
				<p>
					Curabitur eros lacus, molestie eu pharetra et, scelerisque non dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Duis finibus turpis in mattis mollis. Donec finibus nisi ac nisi viverra, vel pulvinar quam dignissim. Suspendisse pulvinar justo at augue cursus, at vestibulum nulla congue. Sed in elit sit amet enim convallis rutrum et ut felis. Praesent ac nunc sodales, efficitur libero non, facilisis neque. Curabitur et dapibus dolor, ut laoreet nisi. Quisque erat odio, ultrices et varius vitae, commodo in neque. Ut posuere tincidunt bibendum.
				</p>

				<p>
					Proin luctus, dolor vitae faucibus molestie, ipsum elit feugiat elit, ut condimentum dolor nisi ac elit. Maecenas nisi nunc, elementum eu auctor a, semper in sapien. Sed libero dui, venenatis fringilla vestibulum in, molestie quis enim. Phasellus sit amet suscipit nisi. In congue nulla iaculis, pretium nulla vel, facilisis leo. Sed eu eros quis erat blandit molestie. Morbi rhoncus eleifend orci ut ornare. Nullam iaculis felis at neque lobortis, vitae consequat mauris tempus. Maecenas dapibus interdum consequat. Donec arcu quam, maximus sit amet neque ac, fermentum convallis tortor. Donec sed tempor erat.
				</p>

				<p>
					Sed vel arcu ac ante ultricies eleifend. Quisque eget leo in metus dapibus luctus. Curabitur condimentum turpis metus, sit amet cursus elit sagittis ac. Maecenas porttitor leo at lectus malesuada, id bibendum sapien rhoncus. Ut laoreet tortor vitae vulputate venenatis. Donec nec bibendum lacus. Etiam ac rhoncus nisi. Phasellus tempus eros ut pharetra vehicula. Proin vestibulum purus lectus, vel mollis lectus lacinia vel. Aliquam ut pellentesque elit, in rutrum justo. Sed congue ante tincidunt ultricies consectetur. Nullam et velit vitae mi maximus ultricies id vitae elit. Mauris quis nunc magna. Sed hendrerit tempus neque, pretium faucibus massa. Fusce erat metus, sollicitudin in tellus non, ultrices consectetur augue.
				</p>

				<p>
					Vestibulum felis neque, finibus id dolor eget, condimentum ultrices quam. Aenean eleifend, quam et eleifend aliquet, est sapien vestibulum magna, vel porttitor ipsum felis imperdiet odio. Vivamus vel sapien id nibh ornare congue eu sed urna. Donec viverra, urna quis sodales tincidunt, lorem tellus ultrices tortor, id maximus quam mauris ut orci. Etiam consectetur leo in imperdiet semper. Sed mollis neque interdum mattis pretium. Maecenas convallis rhoncus varius. Nulla eu eros vel nisi gravida ultrices. Proin dignissim molestie purus vehicula molestie. Donec vitae enim mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>

				<p>
					In vehicula blandit lectus sit amet faucibus. Sed nec tellus non lacus mattis commodo id in metus. Morbi placerat quis quam ac dignissim. Integer cursus dignissim dolor, ac dapibus eros sollicitudin a. Donec accumsan risus vel est consequat convallis. Vivamus tempor lectus lacus, quis dictum lacus cursus a. In laoreet dolor sit amet dui fringilla bibendum. Cras pretium condimentum turpis, vestibulum pharetra lorem tincidunt id. Quisque a ante interdum, bibendum diam in, dictum leo. Curabitur enim arcu, tincidunt elementum est eget, porttitor suscipit augue. Mauris ullamcorper ullamcorper mattis. Aliquam dapibus, ante id efficitur laoreet, neque justo scelerisque erat, vitae mattis tortor est ut erat. Aliquam ac porta libero, at semper urna. Cras in orci velit.
				</p>
			</div>
			<div id="BDD" class="text">
				<h2>BDD</h2>
				<p>
					Curabitur eros lacus, molestie eu pharetra et, scelerisque non dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Duis finibus turpis in mattis mollis. Donec finibus nisi ac nisi viverra, vel pulvinar quam dignissim. Suspendisse pulvinar justo at augue cursus, at vestibulum nulla congue. Sed in elit sit amet enim convallis rutrum et ut felis. Praesent ac nunc sodales, efficitur libero non, facilisis neque. Curabitur et dapibus dolor, ut laoreet nisi. Quisque erat odio, ultrices et varius vitae, commodo in neque. Ut posuere tincidunt bibendum.
				</p>

				<p>
					Proin luctus, dolor vitae faucibus molestie, ipsum elit feugiat elit, ut condimentum dolor nisi ac elit. Maecenas nisi nunc, elementum eu auctor a, semper in sapien. Sed libero dui, venenatis fringilla vestibulum in, molestie quis enim. Phasellus sit amet suscipit nisi. In congue nulla iaculis, pretium nulla vel, facilisis leo. Sed eu eros quis erat blandit molestie. Morbi rhoncus eleifend orci ut ornare. Nullam iaculis felis at neque lobortis, vitae consequat mauris tempus. Maecenas dapibus interdum consequat. Donec arcu quam, maximus sit amet neque ac, fermentum convallis tortor. Donec sed tempor erat.
				</p>

				<p>
					Sed vel arcu ac ante ultricies eleifend. Quisque eget leo in metus dapibus luctus. Curabitur condimentum turpis metus, sit amet cursus elit sagittis ac. Maecenas porttitor leo at lectus malesuada, id bibendum sapien rhoncus. Ut laoreet tortor vitae vulputate venenatis. Donec nec bibendum lacus. Etiam ac rhoncus nisi. Phasellus tempus eros ut pharetra vehicula. Proin vestibulum purus lectus, vel mollis lectus lacinia vel. Aliquam ut pellentesque elit, in rutrum justo. Sed congue ante tincidunt ultricies consectetur. Nullam et velit vitae mi maximus ultricies id vitae elit. Mauris quis nunc magna. Sed hendrerit tempus neque, pretium faucibus massa. Fusce erat metus, sollicitudin in tellus non, ultrices consectetur augue.
				</p>

				<p>
					Vestibulum felis neque, finibus id dolor eget, condimentum ultrices quam. Aenean eleifend, quam et eleifend aliquet, est sapien vestibulum magna, vel porttitor ipsum felis imperdiet odio. Vivamus vel sapien id nibh ornare congue eu sed urna. Donec viverra, urna quis sodales tincidunt, lorem tellus ultrices tortor, id maximus quam mauris ut orci. Etiam consectetur leo in imperdiet semper. Sed mollis neque interdum mattis pretium. Maecenas convallis rhoncus varius. Nulla eu eros vel nisi gravida ultrices. Proin dignissim molestie purus vehicula molestie. Donec vitae enim mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>

				<p>
					In vehicula blandit lectus sit amet faucibus. Sed nec tellus non lacus mattis commodo id in metus. Morbi placerat quis quam ac dignissim. Integer cursus dignissim dolor, ac dapibus eros sollicitudin a. Donec accumsan risus vel est consequat convallis. Vivamus tempor lectus lacus, quis dictum lacus cursus a. In laoreet dolor sit amet dui fringilla bibendum. Cras pretium condimentum turpis, vestibulum pharetra lorem tincidunt id. Quisque a ante interdum, bibendum diam in, dictum leo. Curabitur enim arcu, tincidunt elementum est eget, porttitor suscipit augue. Mauris ullamcorper ullamcorper mattis. Aliquam dapibus, ante id efficitur laoreet, neque justo scelerisque erat, vitae mattis tortor est ut erat. Aliquam ac porta libero, at semper urna. Cras in orci velit.
				</p>
			</div>
			<div id="LaPoste" class="text">
				<h2>LA POSTE</h2>
				<p>
					Curabitur eros lacus, molestie eu pharetra et, scelerisque non dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Duis finibus turpis in mattis mollis. Donec finibus nisi ac nisi viverra, vel pulvinar quam dignissim. Suspendisse pulvinar justo at augue cursus, at vestibulum nulla congue. Sed in elit sit amet enim convallis rutrum et ut felis. Praesent ac nunc sodales, efficitur libero non, facilisis neque. Curabitur et dapibus dolor, ut laoreet nisi. Quisque erat odio, ultrices et varius vitae, commodo in neque. Ut posuere tincidunt bibendum.
				</p>

				<p>
					Proin luctus, dolor vitae faucibus molestie, ipsum elit feugiat elit, ut condimentum dolor nisi ac elit. Maecenas nisi nunc, elementum eu auctor a, semper in sapien. Sed libero dui, venenatis fringilla vestibulum in, molestie quis enim. Phasellus sit amet suscipit nisi. In congue nulla iaculis, pretium nulla vel, facilisis leo. Sed eu eros quis erat blandit molestie. Morbi rhoncus eleifend orci ut ornare. Nullam iaculis felis at neque lobortis, vitae consequat mauris tempus. Maecenas dapibus interdum consequat. Donec arcu quam, maximus sit amet neque ac, fermentum convallis tortor. Donec sed tempor erat.
				</p>

				<p>
					Sed vel arcu ac ante ultricies eleifend. Quisque eget leo in metus dapibus luctus. Curabitur condimentum turpis metus, sit amet cursus elit sagittis ac. Maecenas porttitor leo at lectus malesuada, id bibendum sapien rhoncus. Ut laoreet tortor vitae vulputate venenatis. Donec nec bibendum lacus. Etiam ac rhoncus nisi. Phasellus tempus eros ut pharetra vehicula. Proin vestibulum purus lectus, vel mollis lectus lacinia vel. Aliquam ut pellentesque elit, in rutrum justo. Sed congue ante tincidunt ultricies consectetur. Nullam et velit vitae mi maximus ultricies id vitae elit. Mauris quis nunc magna. Sed hendrerit tempus neque, pretium faucibus massa. Fusce erat metus, sollicitudin in tellus non, ultrices consectetur augue.
				</p>

				<p>
					Vestibulum felis neque, finibus id dolor eget, condimentum ultrices quam. Aenean eleifend, quam et eleifend aliquet, est sapien vestibulum magna, vel porttitor ipsum felis imperdiet odio. Vivamus vel sapien id nibh ornare congue eu sed urna. Donec viverra, urna quis sodales tincidunt, lorem tellus ultrices tortor, id maximus quam mauris ut orci. Etiam consectetur leo in imperdiet semper. Sed mollis neque interdum mattis pretium. Maecenas convallis rhoncus varius. Nulla eu eros vel nisi gravida ultrices. Proin dignissim molestie purus vehicula molestie. Donec vitae enim mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>

				<p>
					In vehicula blandit lectus sit amet faucibus. Sed nec tellus non lacus mattis commodo id in metus. Morbi placerat quis quam ac dignissim. Integer cursus dignissim dolor, ac dapibus eros sollicitudin a. Donec accumsan risus vel est consequat convallis. Vivamus tempor lectus lacus, quis dictum lacus cursus a. In laoreet dolor sit amet dui fringilla bibendum. Cras pretium condimentum turpis, vestibulum pharetra lorem tincidunt id. Quisque a ante interdum, bibendum diam in, dictum leo. Curabitur enim arcu, tincidunt elementum est eget, porttitor suscipit augue. Mauris ullamcorper ullamcorper mattis. Aliquam dapibus, ante id efficitur laoreet, neque justo scelerisque erat, vitae mattis tortor est ut erat. Aliquam ac porta libero, at semper urna. Cras in orci velit.
				</p>
			</div>
		</div>
	</section>
	<footer>
	</footer>
</body>
</html>