 
  <!--Main PHP file
globals functions to display html Page

dislayPage()
displayTitle($title)
displayMessage($objet, $message)
displayFooter()-->

<?php

function displayPage(){
?>
    <!DOCTYPE html>

    <html lang="fr">
	    <head>
		    <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0">
		    <link href="rsc/bootstrap/css/bootstrap.css" rel="stylesheet" />
		
		    <link rel="stylesheet" href="mainStyle.css" />
		    <title>Site du projet Augustine</title>
		    <link rel="icon" type="image/png" href="rsc/img/Accueil_footer.png">
	    </head>

	    <body>
		    <!-- Includes for script -->
	    <script src="rsc/jquery.js"></script>
            <script src="rsc/bootstrap/js/bootstrap.js"></script>
	    <script src="rsc/son.js"></script>   
				
		    <header class="navbar navbar-default navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
			    <div class="container">
				    <div class="navbar-header">
					    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-navbar-collapse">
						    <span class="sr-only">Toggle navigation</span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-abr"></span>
					    </button>
					    <a class="navbar-brand" href="index.html"><img src="rsc/img/Accueil.png" height="20" width="65" /></a>
				    </div>

				    <nav class="collapse navbar-collapse" id="bs-exambple-navbar-collapse-1">
					    <ul class="nav navbar-nav">
						    <li>
							    <a href="presentation.html">Pr&eacutesentation</a>
						    </li>
						    <li class="dropdown">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Historique<b class="caret"></b></a>
							    <ul class="dropdown-menu">
								    <li><a href="historique.html#2011"><span class="glyphicon glyphicon-share-alt"></span>Ann&eacutee 2011</a></li>
								    <li><a href="historique.html#2012"><span class="glyphicon glyphicon-share-alt"></span>Ann&eacutee 2012</a></li>
								    <li><a href="historique.html#2013"><span class="glyphicon glyphicon-share-alt"></span>Ann&eacutee 2013</a></li>
								    <li><a href="historique.html#presse"><span class="glyphicon glyphicon-share-alt"></span>Presse</a></li>
								</ul>
						    </li>
					    </ul>
					    <ul class="nav navbar-nav">
						    <li><a href="galerie.html">Galerie</a></li>
						    <li><a href="sponsors.html">Sponsors</a></li>
						    <li><a href="support.html">Support</a></li>
					    </ul>

					    <form class="navbar-form navbar-right" role="search">
						    <div class="form-group">	
							    <input type="text" class="form-control" placeholder="Rechercher">
						    </div>	
							    <button type="submit"><a href="#"><span class="glyphicon glyphicon-search" ></span></a></button>
					    </form>
				    </nav>
			    </div>
		    </header>
		
		    <!-- 
			    navBar's end 
			    page's beginning
		    -->
		
		    <div class="MainDiv">
<?php
} // displayPage end




function displayTitle($title){
?>
    <div class="bs-header">
				<div class="container">
					<p>
						<h1><?php echo $title; ?></h1>
						
					</p>
				</div>
			</div>
<?php
} // displayTitle end






function displayMessage($objet, $message){
?>
    <div class="bs-docs-section">
        <div class="page-header">
		    <h2><?php echo $objet; ?></h2>
		</div>
	    <div class="container">
		    <p><?php echo $message; ?></p>
        </div>
    </div>
<?php
} // displayMessage end






function displayFooter(){
?>
    </div> <!-- MainDiv's end -->
    <footer>
        <p>
            <span class="AlignLeft">
			    <a href="index.html"><img src="rsc/img/Accueil_footer.png" alt="Logo" class="FooterLogo" />Accueil du site</a>
			</span>
			<span class="AlignRight">
				<a href="http://facebook.com/projetaugustinemelun" target="_blank"><img src="rsc/img/Facebook.png" alt="logo Facebook" />Facebook</a>
				<a href="http://twitter.com/ProjetAugustine" target="_blank"><img src="rsc/img/Twitter.png" alt="logo Twitter" />Twitter</a>
				<a href="support.html#mail" ><img src="rsc/img/Mail.png" alt="logo Mail" />Nous &eacutecrire</a>
			</span>
		</p>
		<div class="FooterEnd"></div>
	</footer>	
	</body>
    </html>
<?php
} // displayFooter end



function displayMail($civilite, $nom, $prenom, $objet, $msg){
?>
	<div class="bs-docs-section">
        <div class="page-header">
                    <h2>Votre message</h2>
                </div>
            <div class="container">
                    <p><?php echo "$civilite $nom $prenom,"; ?></p>
		    <br>
		    <p><?php echo "Objet : $objet"; ?></p>
		    <br>
		    <p><?php echo "$msg"; ?></p>
        </div>
    </div>
<?php
} // displayMail end
?>


