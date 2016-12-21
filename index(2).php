<!DOCTYPE html>

<html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<meta property="og:title" content="Meme generator" />
<meta property="og:description" content="Ce site est fantastique" />
<meta property="og:url" content="http://public:acspublic@www.quentinp.student.codeur.online/Memegenerator/index(2).php" />
<meta property="og:image" content="http://public:acspublic@www.quentinp.student.codeur.online/Memegenerator/generatepictures/5857d74b29a4f.jpg" />




<head>


	<title>Générateur de meme</title>


</head>


<body>

	<header>

		<div class="fb-share-button" data-href="http://public:acspublic@alexandran.student.codeur.online/Memegenerator_TEST/" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="http://public:acspublic@alexandran.student.codeur.online/Memegenerator_TEST/">Partager</a></div>
		<a href="https://twitter.com/share"
				class="twitter-share-button"
				data-url="http://public:acspublic@alexandran.student.codeur.online/Memegenerator_TEST/"
				data-lang="fr">Tweeter</a>


	</header>




	<div class="container-fluid">
		<div class="row">




			<div class="col-md-6" id="colimg">



				<?php include("afficheimage.php") ?>


			</div>



			<div class="col-md-6">


			<form  name="formgenerator" class="edit" action="resultat.php" method="GET">
					<table>
						<tr>
							<td colspan="2">
								<img src="" id="imageSelect">
							</td>
						</tr>
						<tr>
							<td>
								<input type="hidden" name="idImage" value=""/>
							</td>
							<td>
								<input type="text" placeholder="Texte du haut" name="upperTextbox"/>
							</td>
							<td>
								<input type="text" placeholder="texte du bas" name="lowerTextbox"/>
							</td>
						</tr>
					</table>
					<input class="btn" type="submit" value="Générer">
				</form>






			</div>



		</div>


	</div>






<footer>


</footer>


</body>


<script type="text/javascript">

function setIdImage(id,chemin){


formgenerator.idImage.value=id;
document.getElementById("imageSelect").src=chemin;

}



</script>

<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->



		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		</script>


</html>
