<?php
require 'connection.php';
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");

if (isset($_POST['submitTextil'])) {
    $name = $_POST['nom'];
    $name_text = $_POST['nom_text_art'];
    $price_text = $_POST['prix_text_art'];
    $nbre_text = $_POST['nombre_text_art'];

    if (isset($name ) && isset($name_text  ) && isset( $price_text ) && isset($nbre_text ) &&  !empty($name) && !empty($name_text) && !empty($price_text) &&!empty($nbre_text)) {
        echo "<h5 style='color: indigo'>votre commande de produits textiles". "  ";
        echo "  ";
        //$conn->query("INSERT INTO `textile`(id,nom,nom_text_art,prix_text_art,nombre_text_art) VALUES(NULL,'$name','$name_text','$price_text ','$nbre_text')");
        $conn->query("INSERT INTO `textile`(id,nom,nom_text_art,prix_text_art,nombre_text_art) VALUES(NULL, '$name','$name_text','$price_text','$nbre_text')");

        echo " est faite, vous serez livrés dans les 48h.</h5>";
    }
}

?>


<div class="container"  ><!--cont-->
    <?php
    require 'meta_css.php';

    ?>

            <div  class="row ">
                       <div class="col-xs-2"  style="width:5%;" >
                              <img  id="logo" src="images/pellFourche.jpg">
                       </div>
                                                     <div class="col-xs-1" style=" width:10%;">

                                                      </div>
                                         <div   class="col-xs-4"  style="text-align: center;width: 35%;">
                                                                 <h2  style=" background-color: mediumorchid; ">TEXTILES</h2>
                                                     <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                                         </div>

                                                   <div class="col-xs-1"  style="width: 5%;">

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
            </div><br>


    <?php
    require "entête.php";
    ?>
<div class="row ">
    <div  class="col-xs-7"  style="width:55%">
        <h4>RECUPERATION  DES DECHETS TEXTILES</h4>
        <p>Les chûtes de tissus sont  jetées par tonnes chaque jour ,alors qu’on pourrait <br>
        réaliser des produits utiles dans notre quotidien. Ceci contribuerait à diminuer<br>
        le volume de nos ordures. C’est l’exemple des masques que nous  utilisons aujourd’hui<br>
        pour nous protéger et protéger les autres contres des maladies.<br>
        Des sacs en tissus ,des couvertures en patchwork  etc.<br><br>
        ***Les sacs tissés (cette réalisation fut mon idée il y’a une trentaine d’années).<br>

        1)première étape:  prendre des morceaux de tissus, faire des lamelles de 3cm de large ;<br>
        les longueurs des lamelles et les couleurs ou motifs peuvent être variées.<br>

        2)deuxième étape : coudre les lamelles bout à bout  afin de réaliser des lianes en tissus ;<br>

        3)troisième étape:fabriquer un moule ,de préférence en carton.Le moule devra être léger;car ici <br>
        ,pour ceux qui ont observé les meubles en tissés en rotin ;nous allons utiliser le même procédé sauf<br>
        que ça sera avec un moule.<br>

        4)quatrième étape:enrouler la longue corde autour du carton de manière à ce qu’on ne puisse plus<br>
        voir le carte que vous aurez recouvert.<br>

        5)Commencer le tissage,en introduisant le bout de votre corde à travers les cordes horizontales pour<br>
        former un tissage qui ressemble à celui des chaises en rotin;surtout faites en sorte que les mailles<br>
        de votre tissage soient serrées à chaque  tour.<br>

        6)préparer deux cordes tressées pour faire des lanières de votre sacs .<br>

        7)préparer une doublure et deux fermetures;une petite fermeture qui servira pour la poche<br>
        interne cousue sur la doublure. Et une seconde fermeture pour ouvrir notre sac.<br>

        8)placer nos lanières la grande fermeture, vérifiez les finitions.<br>
        </p>
    </div>

            <div  class="col-xs-5" style="width:20% ">
                <div >
                    Chûtes de tissus<br>
                    <img class="image" src="images/chuteTissus.jpg" ></div><br>

                <div>
                    Sac tissé en tissus <br>
                    <img class="image" src="images/sacTisse.jpg" ></div><br>
                <div>
                    Masques de protection<br>
                    <img class="image" src="images/masque2.jpg">
                </div>
            </div>
                <div  class="col-xs-3"  style="width:25%;">
                    <form  action ="textil1.php"  enctype="multipart/form-data"   method="POST">
                        <h6>VOTRE NOM</h6>
                        <input class="form-control  input-lg"  type="text"  name="nom" value="" >
                        <h6>NOM DE L'ARTICLE</h6>
                        <input class="form-control  input-lg"  type="text"  name="nom_text_art" value="" >
                        <h6>SON PRIX</h6>
                        <input class="form-control  input-lg"  type="number"  name="prix_text_art" value="" >
                        <h6>COMBIEN EN VOULEZ VOUS?</h6>
                        <input class="form-control  input-lg"  type="number" name="nombre_text_art" value="" >
                        <h6>VALIDEZ:</h6>
                        <input class="form-control  input-lg"  type="submit"  name="submitTextil">
                    </form>


                    <div  class="col-xs-12">
                        <div  class="col-xs-2" style="height: 50px;" >

                        </div>
                        <div class="col-xs-4"  id="theBlock">
                            <div class= "carre" id="one"><h4>prix compétitifs</h4></div>
                            <div class= "carre" id="two"><h5>masques<br>tailles et couleurs <br>sur commandes</h5> </div>
                            <div  class= "carre" id="tree"><h5>prix unité:<br>de 4euros à 50 euros</h5> </div>
                            <div  class= "carre" id="four"><h5>masques à des prix compétitfs<br>masques tissus simple <br> coton:4eur/pièce<br>les dix pour:20eur<br>les 50 pour:25eur</h5></div>
                            <div  class= "carre" id="five"><h5>sacs(30/30cm):10eur;<br>sacs(50/50cm):15eur;<br>grands sacs(80/50cm):20eur;<br>pachworks:2.5/2.5m<br>masques toutes les tailles:4eur </h5></div>
                        </div>
<h5> les sacs(30/30cm):10eur;<br>sacs(50/50cm):15eur;<br>sacs(80/50cm):20eur<br>pachworks:2.5/2.5m:  <br>a partir de 80eur<br>masques toutes les<br> tailles:4eur/pièce</h5>
                    </div>
                    <div class="col-xs-4" style="height: 400px;"></div>
                    <div class="col-xs-2">
                        <section id="buttonSpace"  style="">
                            <button onclick="clickMe();">on button</button>
                        </section>
                    </div>
                </div>
                </div>
    <script src="script.js"></script>
            </div>
</div>