<!DOCTYPE html>

<html>
  <head>
    <?php include('header.inc.php'); ?>
    <title>La Boutik - ajout de produits</title>
  </head>

  <body>
    <div id="container">
      <form class="form-horizontal" method="post" action="ajoutProduit_post.php">
        <fieldset>  

          <!-- Form Name -->
          <legend>Ajout d'un produit à la base de donnée</legend>

          <!-- nomProduit -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nom</label>  
            <div class="col-md-4">
              <input id="nomProduit" name="nomProduit" type="text" placeholder=""
                     class="form-control input-md" required="">

            </div>
          </div>

          <!-- descriptRapide -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Description rapide</label>  
            <div class="col-md-4">
              <input id="descriptRapide" name="descriptRapide" type="text" placeholder=""
                     class="form-control input-md">

            </div>
          </div>

          <!-- description -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Description complète</label>  
            <div class="col-md-6">
              <input id="description" name="description" type="text" placeholder=""
                     class="form-control input-md">

            </div>
          </div>

          <!-- stock -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nbre en stock</label>  
            <div class="col-md-2 col-xs-3">
              <input id="stock" name="stock" type="number" placeholder=""
                     class="form-control input-md" required="">

            </div>
          </div>

          <!-- prix -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Prix</label>  
            <div class="col-md-2 col-xs-3">
              <input id="prix" name="prix" type="number" step="any" placeholder=""
                     class="form-control input-md" required="">

            </div>
          </div>
          
          <!-- cat -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Catégorie</label>
            <div class="col-md-4">
              <select id="cat" name="cat" type="number" class="form-control">
                <option value="1">Machines de musculation</option>
                <option value="2">Poids libres</option>
                <option value="3">Boissons de l'effort</option>
                <option value="4">Compléments alimentaires</option>
              </select>
            </div>
          </div>

          <!-- ref -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Ref.</label>  
            <div class="col-md-2 col-xs-3">
              <input id="ref" name="ref" type="text" placeholder=""
                     class="form-control input-md" required="">

            </div>
          </div>          
          
          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">

              <input class="btn btn-primary" type="submit" value="Envoyer" />
            </div>
          </div>

        
      
    </div>
  </body>




