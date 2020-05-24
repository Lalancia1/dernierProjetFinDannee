<?php
require "connection.php";
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");
if (isset($_POST['submitPK'])) {
    $name = $_POST['nom'];
    $name_alim = $_POST['nom_alim_art'];
    $price_alim = $_POST['prix_alim_art'];
    $nbre_alim = $_POST['nombre_alim_art'];

    if ((isset($name) && isset($name_alim) && isset($price_alim) && isset($nbre_alim)) && !empty($name)
        && !empty($name_alim) && !empty($price_alim) && !empty($nbre_alim)) {
        echo "<h6 style='color: indigo;'>Votre commande de compost"." ";
        echo "<br>";

        $conn->query("INSERT INTO `alimentaire`(id,nom,nom_alim_art,prix_alim_art,nombre_alim_art) VALUES(NULL, '$name','$name_alim','$price_alim','$nbre_alim')");
      echo" est faite , vous serez livré sous 48h,Merci.</h6>";
    }
}

?>
<div class="container" ><!--cont-->
                     <?php
                          require 'meta_css.php';

                      ?>
           <div  class="row  col-xs-12">
                                                   <div class="col-xs-2"  style="width:5%;">
                                                         <img  id="logo" src="images/pellFourche.jpg">
                                                   </div>
                                 <div class="col-xs-1" style="width: 10%;">

                                 </div>
                                        <div   class="col-xs-4" style="text-align: center;width: 40%;" >
                                                <h2  style=" background-color: mediumorchid;   ">
                                                      ALIMENTAIRE
                                                </h2>
                                                      <h5  id="dechet1" style="margin: inherit;">
                                                              DES DECHETS AUX OBJETS UTILES
                                                      </h5>
                                        </div>

                                                             <div class="col-xs-1" style="width: 5%;">
                                                             </div>
                                 <div class="col-xs-1" style="width: 10%;" >
                                        <button>
                                              <a  href="aPropos.php">
                                                      <h5>
                                                           A PROPOS DU SITE
                                                      </h5>
                                              </a>
                                        </button>
                                 </div>
                                               <div class="col-xs-1" style="width: 5%;">
                                               </div>
                           <div class="col-xs-2" style="width: 20%;">
                               <p>les payements se font à la<br> livraison par carte bancaire</p>
                           </div>
           </div><br>

                  <?php
                        require "entête.php";
                  ?>
     <div  class="row  col-xs-12">
              <div class="col-xs-5"  style="width:55%;">
                                             <h4>Transformation des déchets alimentaires</h4>
                                     Le processus de compostage est la transformation biologique<br>
                              des matières organiques en présence d’eau et d’oxygène.Une fermentation<br>
                              s’opère,des micro-organismes transforment les déchets pour former ,après<br>

                               maturation du compost ,qui est un produit stabilisé.<br>
                               C’est un geste écologique car ceci réduit le volume de nos ordures<br>
                                ménagères ; On peout ainsi faire  du compost avec :<br>
                                Des déchets de cuisine,des épluchures,des fruits et légumes abîmés ,coquilles d’oeufs<br>
                       -les déchets de jardin:gazon tondu,feuilles exemptes de maladies.<br>
                       -Déchets de maison : cendres,papier journal,sciures…<br>

                                Selon les cas on peut utiliser le compost à des différents stades de maturation.<br>
                                On a un compost jeune de 1 ou 2 mois, qu’on peut mettre en paillage pour nourrir le sol.<br>
                                On peut le laisser mûrir pendant 6 à 12 mois;afin de l’utiliser comme angrais organique;<br>
                                il va nourrir directement  les plantes et améliorer le sol.<br>
                       Le compost améliore la rétention d’eau du sol ; Il va donner une bonne structure au sol ;<br>
                       il va donner une couleur plus  noire au sol,ce qui  va permettre à celui- ci de mieux capter<br>
                       les rayons du soleil . Le compost permet une belle oxygénation du sol.<br>
                       Toujours mélanger les déchets de cuisine avec d’autres déchets. Afin d’équilibrer l’apport<br>
                                          en carbone et favoriser l’oxygénation.<br>
                                          Déchets de cuisines, rapport carbone:10<br>
                                          Fumiers ,rapport carbone:30 ,<br>
                                          Déchet de pelouse:10 ,<br>
                                          Terre:10,Fruits et légumes:15<br>
                                Feuilles mortes:30 à 60,Broyats de rameaux:50à 70,<br>
                                          Pailles:100 à 150 ,<br>
                                          Papier en carton:100à 150 ,<br>
                                          écorces:150 ;<br>
                       On mélange les matières, sachant qu’autant elles sont sèches ,autant leurs taux <br>
                       de carbone est élevé.Le but étant oxygéner le sol,il est bon de mélanger de la paille<br>
                       sèche et les restes alimentaires ,pour équilibrer les apports.la proportion c’est deux<br>
                       portions de matières humides pour une portions de matières sèches.<br>
                                       On laisse à la décomposition  quelques semaines .<br>
                       On peut par la suite tamiser pour mettre dans des sacs pour la  vente.<br>
                       Ce qui se passe c’est qu’au bout de quelques semaines,le mélange contient des bactéries des<br>
                       champignons,des vers de terre, coléoptères  etc..qui vont dégrader les apports de matières<br>
                        organiques pour nourrir un sol dégradé en le structurant.Plus le sol est pauvre,donc avec<br>
                        peu de vie ,plus il a besoin d’aide .
              </div>
                   <div class="col-xs-4"   style="width:20%;">

                          <h5 id="toto">Au cas où vous seriez interessés,<br>nous vendons le compost par sacs de 5kg  et 10kg
                          </h5><br>

                                     <P>ALIMENTS</P><br>
                          <div  class="t1"><img class="image" src="images/compost2.jpg"> </div><br>
                                      <p>Paille</p><br>
                          <div class="t1"><img class="image" src="images/paille.jpg"  ></div><br>
                                      <p>Compost</p><br>
                          <div class="t1"><img class="image" src="images/compost4_.jpg"  ></div>

                   </div>
                          <div  class="col-xs-3"  style="width:25%;">
                                   <form  action ="pageAlimentaire.php"  enctype="multipart/form-data"   method="post">
                                                                      <h6>VOTRE NOM</h6>
                                                   <input class="form-control  input-lg"  type="text"  name="nom" value="" >
                                                                   <h6>NOM DE L'ARTICLE</h6>
                                           <input class="form-control  input-lg"  type="text"  name="nom_alim_art" value="" >
                                                                      <h6>SON PRIX</h6>
                                           <input class="form-control  input-lg"  type="number"  name="prix_alim_art" value="" >
                                                              <h6>COMBIEN EN VOULEZ VOUS?</h6>
                                           <input class="form-control  input-lg"  type="number" name="nombre_alim_art" value="" >
                                                                   <h6>VALIDEZ:</h6>
                                           <input class="form-control  input-lg"  type="submit"  name="submitPK">
                                   </form>
                                                        <div  class="" style="height: 50px;" >

                                                        </div>
                                 <div class="">
                                             <section id="buttonSpace"  style="">
                                             <button onclick="clickMe();">Cliquez ici pour les prix de nos produits
                                             </button>
                                             </section>
                                 </div>
                         <div class="col-xs-4"  id="theBlock">
                                <div class= "carre" id="one">
                                       <h4 style="color:white;">PROFITEZ <br> de nos produits<br>  biologiques ,sans<br>  produits chimiques ajoutés,
                                             <br>  nous vous offrons les <br> services de première<br>  classe en matière <br> de compost pour
                                             <br>  avoir des plantes<br> en bonne santé<br>à des prix compétitifs
                                       </h4>
                                </div>

                                 <div class= "carre" id="two">
                                          <h5>compost  <br>sur commandes le compost se vend<br> en sacs de 5 à 15kg;<br>nous
                                                 pouvons aussi<br> nous adapter a <br> vos besoins.Les<br> livraisons à domicile<br>
                                                 peuvent se faire<br> au bout d'une <br>semaine* sans frais<br>de commissions en plus
                                          </h5>
                                 </div>

                                          <div  class= "carre" id="tree">
                                                  <h5>
                                                      prix des sacs de compost<br>de 6euros/les 5kg<br> à 15 euros/les10kg
                                                  </h5>
                                          </div>
                                 <div  class= "carre" id="four">
                                          <h5>
                                                 compost biologique <br>pour nourrir vos plantes<br>prix des sacs de compost
                                                <br>de 6euros/les 5kg<br> à 15 euros/les10kg
                                          </h5>
                                 </div>
                                 <div  class= "carre" id="five">
                                          <h5>
                                               <br>Nous livrons chez vous à domicile ,<br>nous pouvons aussi<br> nous adapter a <br>
                                               vos besoins.Les<br> livraisons à domicile<br> peuvent se faire<br> au bout d'une <br>semaine*
                                               sans<br> commissions en plus.
                                          </h5>
                                 </div>
                                       <div>
                                             <h5 style="">
                                                    le compost se vend<br> en sacs de 5 à 15kg;<br>nous pouvons aussi<br> nous adapter
                                                   a <br> vos besoins.Les<br> livraisons à domicile<br> peuvent se faire<br> au bout d'une
                                                    <br>semaine* sans frais<br>de commissions en plus.
                                             </h5>

                                       </div>

                         </div>



                         <script src="script.js"></script>
                    </div>
              </div>

    </div>

</div>