<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Ma page</title>
      <meta charset="utf-8">
	    <!-- <link rel="stylesheet"  href="vue/style/style.css" /> -->
    </head>
  	<body>

      <fieldset>
        <legend>Menu principal</legend>
        <form method="post" action="site.php">
          <label for="edt_cons">Consulter l'EDT d'un conseilller</label><input type="radio" id="edt_cons" name="selection" value="edt_conseiller" required/><br/>
          <label for="edt_jour">Consulter l'EDT d'un jour</label><input type="radio" name="selection" value="edt_jour" required/><br/>
          <input type='submit' name='validation' value="Consulter EDT" />
        </form>
        <form method="post" action="site.php">
        <p><input type='submit' name='demande_nouv_client' value="Inscrire un nouveau client" /></p>
        </form>
        <form method="post" action="site.php">
        <p><input type='submit' name='demande_modif_decouvert' value="Modifier un decouvert" /></p>
        </form>
        <form method="post" action="site.php">
          <label for="supp_con">Resilier un contrat</label><input type="radio" id="supp_con" name="choix_supp" value="supp_con" required/><br/>
          <label for="supp_cb">Resilier un compte</label><input type="radio" id="supp_cb" name="choix_supp" value="supp_cb" required/><br/>
        <p><input type='submit' name='demande_resiliation' value="Résilier" /></p>
        </form>
      </fieldset>
      <?php echo $contenu ?>

      <fieldset>
        <legend>Se déconnecter</legend>
      <form action="site.php" method='post'>
        <p><input type="submit" value="Disconnect" name="disconnect"/></p>
      </form>
    </fieldset>

  	</body>
 </html>
