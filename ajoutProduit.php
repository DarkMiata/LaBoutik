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

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nomproduit">Nom</label>  
            <div class="col-md-4">
              <input id="nomProduit" name="nomproduit" type="text" placeholder="" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="descriptRapide">Description rapide</label>  
            <div class="col-md-4">
              <input id="descriptRapide" name="descriptRapide" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description complète</label>  
            <div class="col-md-6">
              <input id="description" name="description" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="stock">Nbre en stock</label>  
            <div class="col-md-2 col-xs-3">
              <input id="stock" name="stock" type="text" placeholder="" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="prix">Prix</label>  
            <div class="col-md-2 col-xs-3">
              <input id="prix" name="prix" type="text" placeholder="" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="cat">Catégorie</label>
            <div class="col-md-4">
              <select id="cat" name="cat" class="form-control">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
              </select>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">

              <input class="btn btn-primary" type="submit" value="Envoyer" />
            </div>
          </div>

        </fieldset>
      </form>
    </div>
  </body>




