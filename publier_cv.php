<?php
$host = $_SERVER['HTTP_HOST'];
$redirect = "http://$host/confirm.php?redirect=cv";
?>

<?php include 'infodoc.php'; ?>
<html lang="fr">
<?php include 'head.php'; ?>
<body>
	<?php include 'nav.php'; ?>
	<main>
		<div>
			<h1>Publiez votre <strong>CV</strong></h1>
			Sur cette page, en tant que <strong>développeur freelance</strong>, vous pourrez <strong>publier votre CV</strong> pour que notre système de pub puisse vous <strong>mettre en relation avec des entreprises</strong> pour de potentiels emplois dans différents projets informatiques.

			<p>Exemple de languages :<p>
			<ul>
				<li>Java</li>
				<li>NodeJs</li>
				<li>Typescript</li>
				<li>Flutter</li>
				<li>React Natif</li>
				<li>Angular</li>
				<li>C++</li>
				<li>JavaScript</li>
				<li>Python</li>
				<li>CSS</li>
				<li>Html</li>
				<li>Vue</li>
				<li>Ruby</li>
				<li>SQL</li>
				<li>PHP</li>
				<li>MongoDb</li>
				<li>Django</li>
				<li>Oracle</li>
				<li>Test</li>
				<li>Full Stack</li>
				<li>C#</li>
				<li>ReactJs</li>
				<li>Perl</li>
				<li>Kotlin</li>
			</ul>
			<i>Il est important de savoir qu'à l'heure actuelle, la majorité des données sont stockées sous MySQL et Mongo.</i>

			<p>Exemple de Mode de Développement :</p>
			<ul>
				<li>Agile</li>
				<li>Semi-agile</li>
				<li>Intégration Continue</li>
				<li>SCRUM</li>
			</ul>

			<p><strong>Toute les expériences sont acceptés</strong>, voici quelques exemples :</p>
			<ul>
				<li>Ingénieur</li>
				<li>Bac +3</li>
				<li>Master</li>
				<li>Spécialiste</li>
				<li>Bac +2</li>
				<li>Junior</li>
				<li>Senior</li>
			</ul>

			<h1>CV Freelance</h1>
			<form action="" method="get">
				<div>
					<label for="nom">Entrez votre nom: </label>
					<input type="text" name="nom" required>
				</div>
				<div>
					<label for="prenom">Entrez votre prénom: </label>
					<input type="text" name="prenom" required>
				</div>
				<div>
					<label for="email">Entrez votre email: </label>
					<input type="email" name="email" required>
				</div>
				<div>
					<input onclick="window.location.href = '<?= $redirect ?>'" type="submit">
				</div>
			</form>
		</div>
		<img src="images/cv.jpg" alt="cv" >
	</main>
</body>
</html>