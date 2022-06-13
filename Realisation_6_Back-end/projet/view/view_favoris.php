<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style_favoris.css">
    <title>Favoris</title>
</head>
<body>
	<!-- Div contenant toute la page-->
	<div class="corps">
		<!-- div du menu user et des dossiers de favoris  -->
		<div class="menu">
			<!-- div bouton et menu user  -->
			<div class="user">
				<!-- div icone de l'user  -->
				<div class="user_img">
					<img src="./asset/img/user_icon.png" width="15px" height="15px">
				</div>
				<!-- div avec le pseudo récupéré via une fonction -->
				<div class="login">
					<P>Username</P>
				</div>
				<!-- div du bouton menu -->
				<div class="menu_icon">
					<img src="./asset/img/dropdown.webp" width="15px" height="15px">
				</div>
			</div>
			<!-- div afficher tout les favoris et bouton création de dossier -->
			<div class="all_favoris">
				<!-- span du lien pour afficher tous les favoris -->
				<span class="title">
					Favoris
				</span>
				<!-- div bouton ajout dossier -->
				<div class="add_icon">
					<img src="./asset/img/add_folder.webp" width="15px" height="15px">
				</div>
			</div>
			<!-- div contenant tout les dossiers de favoris généré par la fonction  -->
			<div class="all_dos">
				<p> Test</p>
				<!-- div d'un dossier de favoris généré par une fonction -->
				<div class="dos">
					<p> lien qui va générer les cards des favoris </p>
				</div>
			</div>
		</div>
		<!-- div du menu des favoris -->
		<div class="favoris_menu">
			<div class="search">
				<input type="text" name="" id="" placeholder="Search">
				<img src="./asset/img/icon_search.webp" width="15px" height="15px" >
			</div>
		</div>
		<!-- div contenant les carte des favoris généré par une fonction -->
		<div class="all_cards">
			<!-- div contenant un card de favoris généré par une fonction -->
			<div class="card">
				<p>card généré par js</p>
			</div>
		</div>
	</div>
</body>
</html>

