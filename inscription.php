<!DOCTYPE html>

<!-- a ajouter:
  * controle du mdp et sa confirmation


<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">-->

  <!-- Website CSS style -->
  <!--  <link rel="stylesheet" type="text/css" href="assets/css/main.css">-->

  <!-- front login récupéré sur http://bootsnipp.com/snippets/featured/register-page -->

  <?php include('header.inc.php'); ?>

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

        <form class="form-horizontal" method="post" action="inscription_post.php">


          <!-- Nom -->

          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Votre nom</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="nom" id="name"  placeholder="Entrez votre nom"/>
              </div>
            </div>
          </div>

          <!-- Prénom -->

          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Votre prénom</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="prenom" id="name"  placeholder="Entrez votre prénom"/>
              </div>
            </div>
          </div>

          <!-- Adresse -->

          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Votre adresse</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="adresse" id="name"  placeholder="Entrez votre prénom"/>
              </div>
            </div>
          </div>

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

          <!-- mdp confirmation -->        

          <div class="form-group">
            <label for="confirm" class="cols-sm-2 control-label">Mot de passe - confirmation</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmez votre mot de passe"/>
              </div>
            </div>
          </div>

          <!-- bouton enregistrement -->

          <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Enregistrement</button>
          </div>
          <div class="login-register">
            <a href="connexion.php">Connexion</a>
          </div>
          <div class="message_erreur">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>