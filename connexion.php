<html>

<!--
inputs:
  mail
  mdp
-->

<!-- front login récupéré sur http://bootsnipp.com/snippets/featured/register-page -->

  <?php include_once('include_php.php'); ?>
  <?php include('inc/header.inc.php'); ?>

<head>
  <title>La Boutik - connexion au compte</title>
</head>
<body>

  <div class="container">
    <div class="row main">
      <div class="panel-heading">
        <div class="panel-title text-center">
          <h1 class="title">La Boutik</h1>
          <hr />
        </div>
      </div> 
      <div class="main-login main-center">

        <!-- Formulaire -->

        <form class="form-horizontal" method="post" action="connexion_post.php">
        <!-- affichage des messages d'erreur d'inscription
              fonction de 'include_php.php' -->
        <div class="message_erreur"><p>
          <?php msg_erreur(); ?>
        </p></div>

          <!-- Email -->    

          <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Votre Email</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="email" id="email"  placeholder="Entrez votre Email"/>
              </div>
            </div>
          </div>

          <!-- mot de passe -->       

          <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Mot de passe</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" id="password"  placeholder="Entrez votre mot de passe"/>
              </div>
            </div>
          </div>

          <!-- bouton connexion -->

          <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Connexion</button>
          </div>
          <div class="login-register">
            <a href="inscription.php">Inscription</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
<html>

