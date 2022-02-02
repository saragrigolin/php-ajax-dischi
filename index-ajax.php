<?php 
// Stampare a schermo una decina di dischi musicali (vedi screenshot).
// Utilizzare:
// Html, CSS, JS, VueJS, PHP
// Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
// Passate a questa solo dopo aver fatto la prima milestone
// Seconda Milestone:
// Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
// Bonus:
// Attraverso un’altra chiamata api, filtrare gli album per genere
// Fate prima un diagramma come abbiamo visto assieme e poi solo dopo passate a creare i file che vi servono, provate prima ad includere anche con un banale echo pippo  nel file, poi inserite i dati necessari
// Usate questo scaffolding
// index-php.php
// index-ajax.php
// css
//     style.css
// js 
//     script.js
// server
//     db.php
//     controller-api.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <main id="app">
        <div class="container-60 my-5">
			<div class="row">
				<div class="col-3 offset-9 pb-3">
					<select name="genre" id="genre" class="form-select">
						<option value="all">All</option>
						<option value="rock">Rock</option>
						<option value="pop">Pop</option>
						<option value="jazz">Jazz</option>
						<option value="metal">Metal</option>
					</select>
				</div>
			</div>
			<div class="row row-cols-5">
				<div class="col" v-for="card in cards">
                    <div class="spotify-card p-3">
                            <img class="pb-3" :src="card.poster" :alt="card.title">
                            <span class="title pb-1">{{card.title}}</span>
                            <span class="subtitle">{{card.author}}</span>
                            <span class="year">{{card.year}}</span>
                    </div>
                </div>
			</div>
		</div>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>