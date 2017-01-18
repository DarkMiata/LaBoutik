<html>
  <head>
    <?php include('header.inc.php'); ?>
    <title>La Boutik - connexion au compte</title>
  </head>
  
  <div id="container">
  <form class="form-horizontal" method="post" action="connexion_post.php">
    <fieldset>
      <!-- Form Name -->
      <legend>Connexion à votre compte</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="mail">Entrez votre Email</label>  
        <div class="col-md-4">
          <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="mdp">Entrez votre mot de passe</label>
        <div class="col-md-4">
          <input id="mdp" name="mdp" type="password" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="btn_envoi"></label>
        <div class="col-md-4">
          <button id="btn_envoi" name="btn_envoi" type="submit" class="btn btn-primary">Connexion</button>
        </div>
      </div>

    </fieldset>
  </form>
  </div>
  <html>
