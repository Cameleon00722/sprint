<!DOCTYPE html>
<html lang="fr">
  <head>
    <script>
       function affiche(date, date2)
       {
         var date1 = new Date("date");
         var date2 = new Date("date2");
          if(date2<date1){
           alert ("la 2eme date doit être supérieur à la 1ere"); 
          }
       }

    </script>
    <title>Ma page</title>
      <meta charset="utf-8">
	    <link rel="stylesheet"  href="vue/Style/style.css" />
  </head>
  	<body>
      <div class="main">
        <form id="agentedit" action="site.php" method='post'>
          <fieldset>
            <legend>Ajout d'Employée</legend>
            <p>
              login : <input type="text" name="logincompte"/>
            </p>
            <p>
              Mot de passe : <input type="password" name="mdp"/>
            </p>
            <p>
              Rang : <select name="rang">
                <option value="Agent">Agent</option>
                <option value="Conseiller">Conseiller</option>
              </select>
            </p>
            <p>
              <input type="submit" value="Ajouter" name="ajoutemployer"/>
            </p>
          </fieldset>
        </form>
        <form method="post" action="site.php">
          <fieldset>
            <legend>Changer identifiant employé</legend>
            <p>
              <input type="text" name="alogin" id="login1" placeholder="Ancien identifiant" required>
              <input type="password" name="amdp" id="password2" placeholder="ancien mdp" required>
            </p>
            <p>
              <input type="text" name="nlogin" id="login2" placeholder="nouveau identifiant" required>
              <input type="password" name="nmdp" id="password1" placeholder="nouveau mdp" required>
            </p>
            <input type="submit" name="changementcompte" id="formsend">
          </fieldset>
        </form>
        <form method="post" action="site.php">
          <fieldset>
            <legend>gestion contrat</legend>
            <p> <select name="gestionnaire ctrt">
              <option>suppression </option>
              <option>ajout</option>
              <option>Modification</option>
              </select>
                Entrée : <input type="text" name="entrée" id="entrée" placeholder="nom contrat" required>
            </p>
            <input type="submit" name="changementcompte" id="formsend">
          </fieldset>
        </form>
        <form method="post" action="site.php">
          <fieldset>
            <legend>gestion pièce contrat</legend>
            <p>
              <select name="gestionnaire pièce à fournir">
              	<option>suppression </option>
              	<option>ajout</option>
              	<option>Modification</option>
              </select>
              pièce à fournir : <input type="text" name="entrée1" id="entrée1" placeholder="pièce contrat" required>
            </p>
            <input type="submit" name="changementcompte" id="formsend">
          </fieldset>
        </form>
        <form method="post" action="site.php">
          <fieldset>
            <legend>gestion capital et statistique</legend>
            <p>
              <select name="gestionnaire pièce à fournir">
              	<option>Contrat souscris </option>
              	<option>Nombre de rdv</option>
              	<option>nombre total de client</option>
                <option>solde des client</option>
              </select>
            pièce à fournir : <input type="text" name="entrée1" id="entrée1" placeholder="pièce contrat" required>
            </p>
            <input type="submit" name="changementcompte" id="formsend">
            <td><button onclick="affiche()">/</button></td>
          </fieldset>
        </form>

      <?php
        echo $contenu;
      ?>
  	</body>
 </html>
