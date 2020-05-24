<?php

require 'connection.php';
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");
if (isset($_POST['submitBois'])) {
    $name = $_POST['nom'];
    $name_bois = $_POST['nom_bois_art'];
    $price_bois = $_POST['prix_bois_art'];
    $nbre_bois = $_POST['nombre_bois_art'];
    if(isset($name) && isset($name_bois) && isset($price_bois) && isset($nbre_bois) && !empty($name) && !empty($name_bois) && !empty( $price_bois) && !empty($nbre_bois)) {
        echo "<h6 style='color: indigo;'>votre commande est"." " ;

         $conn->query("INSERT INTO `bois`(id,nom,nom_bois_art,prix_bois_art,nombre_bois_art) VALUES(NULL, '$name','$name_bois','$price_bois','$nbre_bois ')");
                           echo "bien enregistrée,vous serez livrés dans les 48 heures.</h6>";
    }
}

?>
<div class="container" ><!--cont-->
    <?php
    require 'meta_css.php';

    ?>


    <div  class="row">
                    <div class="col-xs-2"  style="width:5%;">
                                      <img  id="logo" src="images/pellFourche.jpg">
                    </div>
                                          <div class="col-xs-1" style="width: 10%;">

                                          </div>
                             <div   class="col-xs-4"  style="text-align: center; width: 40%;" >
                                        <h2  style=" background-color: mediumorchid; ">BOIS</h2>
                                       <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                             </div>
                                               <div class="col-xs-1" style="width: 5%;">
                                               </div>
            <div class="col-xs-1"  style="width: 10%;" >
                      <button>
                                 <a  href="aPropos.php">
                                            <h5>A PROPOS DU SITE</h5>
                                 </a>
                     </button>
            </div>
                                          <div class="col-xs-1" style="width: 5%;">
                                          </div>
                      <div class="col-xs-2" style="width: 20%;">
                            <p>les payements se font à la<br> livraison par carte bancaire</p>
                      </div>
    </div>

    <br>
    <?php
    require "entête.php";
    ?>
            <div class="row ">
                    <div class="col-lg-5" style="width:50%;" ><h4>Transformation des déchets de bois</h4>
                                             Les chûtes de bois peuvent servir de plusieurs manières qu'à la poubelle.
                              Nous pouvons, en fonction des dimensions de celle-ci fabriquer plusieurs d'objets utiles dans la vie quotidienne.
                              Nous pouvons fabriquer des ustensiles de cuisine.
                                                Exemple :
                                                <h6>FABRICATION DES SPATULES</h6><br>
                              1)première étape:
                                        Récupérer les morceaux de bois; leurs donner la taille que nous voulons;
                                        pour les morceaux qui n'auraient pas la taille adaptée, coller les morceaux de bois pour élargir la surface de l'objet<br><br>
                              2) Deuxième étape: Les morceaux collés nous également à générer les motif variés
                                        après qu'on ait procédé à la découpe,en fonction de la couleur  des morceaux.
                                        On laisse ensuite sécher la colle et on s'assure que l'objet en bois est bien lisse et poncé.<br><br>
                              3) Troisième étape:
                                        Couper les parties superflues ensuite aplanir si possible sur  un robot le ssurfaces collées.<br><br>
                              4)Quatrième étape:
                                        On dessine les contours de l'objet désiré pour la découpe.<br><br>
                              5)cinquième étape:
                                       Une fois l'objet obtenu,par la découpe, on procède au ponçage pour donner une forme définitive.<br><br>
                                                <h6>UNE FOURCHE À SALADE</h6><br>
                              1)Première étape:
                                        Prendre des morceaux de bois;leurs donner la taille désirée.<br><br>
                              2)Deuxième étape:
                                        Les tailler en 4 faces  d'environ 30cm rectangulaires.<br><br>
                              3)Troisième étape:
                                        Mettre les trous espacés,d'environ 5cm sur une seule et même face.<br><br>
                              4)Quatrième étape:
                                       Fabriquer les morceaux de bois en forme cylindrique,comme des pailles pour jus de fruits.
                                       leurs donner environ 20à25cm;<br><br>
                              5)Cinquième étape:
                                       Mettre la colle dans des trous préparés,y introduire les bois en forme de pailles préparées au début;
                                      Y introduire les bois en forme de pailles préparée;Donner un coup à chacun pour qu'il se plce bien au fond; nettoyer.
                                       La fourche à salade est prête

                    </div>
            <div  class="col-lg-4" style="width:25%;" >
                    <div>
                                       MORCEAUX DE BOIS <br>
                            <img class="image" src="images/copaux1.jpg" >
                    </div>                                       <br>
                    <div>
                                       MEUBLE EN COPEAUX<br>
                            <img class="image" src="images/meuble2.jpg" >
                    </div>
                    <div>
                                       BOIS RECUPERES<br>
                            <img class="image" src="images/brico.jpg"  >
                    </div>
                    <div>
                                       SPATULES<br>
                            <img class="image" src="images/spatule2.jpg"  >
                    </div>
            </div>
                    <div  class="col-xs-3"  style="width:25%;">
                           <form  action ="pageDbois.php"  enctype="multipart/form-data" method="POST">
                                                                             <h6>VOTRE NOM</h6>
                                  <input class="form-control  input-lg"  type="text"  name="nom" value="" style="">
                                                                          <h6>NOM DE L'ARTICLE</h6>
                                  <input class="form-control  input-lg"  type="text"  name="nom_bois_art" value="" >
                                                                          <h6>SON PRIX</h6>
                                  <input class="form-control  input-lg"  type="number"  name="prix_bois_art" value="" >
                                                                    <h6>COMBIEN EN VOULEZ VOUS?</h6>
                                  <input class="form-control  input-lg"  type="number" name="nombre_bois_art" value="" >
                                                                     <h6>VALIDEZ:</h6>
                                  <input class="form-control  input-lg"  type="submit"  name="submitBois">
                         </form>

                                     <div  class="col-xs-2" style="height: 50px;" >
                                            <div class="">
                                                   <section id="buttonSpace"   style="right: auto;">
                                                         <button onclick="clickMe();">
                                                                  Cliquez pour voir le prix de nos produits
                                                         </button>
                                                   </section>
                                     </div>
                    </div>
               <div class="col-xs-4"  id="theBlock">
                    <div class= "carre" id="one">
                              <h4>prix compétitifs</h4>
                    </div>
                    <div class= "carre" id="two">
                              <h5>bois,<br>spatule à 1.5eur*<br><br><br><br> faites des commnades sur<br> mesure pour vos<br> produits nous les<br> mettons également<br> en location pour<br> vos réceptions</h5>
                    </div>
                    <div  class= "carre" id="tree">
                              <h5>prix meuble:25 euros*<br><br><br><h5>nous vous proposons<br> des commnades sur<br> mesure pour vos<br> produits nous les<br> mettons également<br> en location pour<br> vos réceptions</h5>
                    </div>
                    <div  class= "carre" id="four">
                              <h5>nous nous adaptons <br>à vos besoins </h5>
                    </div>
                    <div  class= "carre" id="five">
                              <h5>Les livraisons peuvent  <br>s'effectuer dans votre domicile.<br>nous vous proposons<br> des commnades sur<br> mesure pour vos<br> produits nous les<br> mettons également<br> en location pour<br> vos réceptions</h5>
                    </div>
                   <h5>
                               nous vous proposons<br> des commandes sur<br> mesure pour vos<br> produits nous les<br> mettons également<br> en location pour<br> vos réceptions
                               <br><br><br>Les spatules :<br> à partir de 1.5eur<br>Les meubles en copeaux<br>Des meubles solides<br>A partir de 25eur<br>
                   </h5>
                   *nous vous proposons certains<br> objets en bois exotiques <br>tel que l'iroko et en<br> bois locaux tel que le chaîne.
                </div>

            </div>

        </div>
        <script src="script.js"></script>
    </div>
