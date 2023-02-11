<?php
$host = $_SERVER['HTTP_HOST'];
$redirect = "http://$host/confirm.php?redirect=mission";
?>

<?php include 'infodoc.php'; ?>
<html lang="fr">
<?php include 'head.php'; ?>
<body>
	<?php include 'nav.php'; ?>
	<main>
		<div>
			<h1>Publier toutes vos <strong>missions</strong> sur cette page</h1>

			<p>Sur cette page, en tant qu'entreprise votre travail est de rendre vos missions le plus attractifs possible !</p>
			<p>Vous pouvez définir vos offres ainsi que vos tarifs ou salaires.</p>
			<p>Expliquez de manière claire votre eprojet grace a notre outil de création.</p>
			<p>Ainsi recruter de développeurs devient un jeu d'enfant !</p>

			<p>Exemple de raisons pour recruter un développeur :</p>
			<ol>
				<li>Améliorer vos projets</li>
				<li>Réaliser une application Mobile, Android ou iPhone</li>
				<li>Réaliser une application PC, Windows, Apple ou Linux</li>
				<li>Connaissances en développement Agile ou Semi-agile</li>
			</ol>

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
					<label for="mission">Entrez votre mission: </label>
					<input type="mission" name="mission" required>
				</div>
				<div>
					<input onclick="window.location.href = '<?= $redirect ?>'" type="submit">
				</div>
			</form>
		</div>
		<img src="images/mission.jpg" alt="mission freelance" >
	</main>
</body>
</html>