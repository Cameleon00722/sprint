<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Ma page</title>
      <meta charset="utf-8">
	    <link rel="stylesheet"  href="vue/Style/style.css" />
    </head>
    <body>
      <div class="main">
        <form id="agentedit" action="site.php" method='post'>
          <fieldset>
            <p>
              Nom : <input type="text" name="nomclient"/>
            </p>
            <p>
              prenom : <input type="text" name="prenomclient"/>
            </p>
            <p>
              Date de naissance : <input type="text" name="birthclient"/>
            </p>
            <p>
              <input type="submit" value="Edit" name="rechercheNomClient"/>
            </p>
          </fieldset>
        </form>
        <form id="agentsynth" action="site.php" method='post'>
          <fieldset>
            <p>
              Id du client : <input type="text" name="idclient"/>
              <input type="submit" value="Synthese" name="rechid"/>
            </p>
          </fieldset>
        </form>
        <?php
          echo $contenu;
        ?>
  	</body>
 </html>
