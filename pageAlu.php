<?php
require 'connection.php';
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");

if (isset($_POST['submit'])) {
    $name = $_POST['nom'];
    $name_alu = $_POST['nom_alu_art'];
    $price_alu = $_POST['prix_alu_art'];
    $nbre_alu = $_POST['nombre_alu_art'];
    if ((isset($name) && isset($name_alu) && isset($price_alu) && isset($nbre_alu)) && !empty($name)
        && !empty($name_alu) && !empty($price_alu) && !empty($nbre_alu)) {
        echo  "<h6  style='color: indigo;'>Votre commande en aluminium ". " ";
        echo "<br>";
        //$conn->query("INSERT INTO `aluminium`(id,nom,nom_alu_art,prix_alu_art,nombre_alu_art) VALUES(NULL,'$name','$name_alu','$price_alu ','$nbre_alu')");
        $conn->query("INSERT INTO `aluminium`(id,nom,nom_alu_art,prix_alu_art,nombre_alu_art) VALUES(NULL, '$name','$name_alu','$price_alu','$nbre_alu')");
        echo" est faite , vous serez livré sous 48,MERCI.</h6>";
    }
}
?>
<div class="container" ><!--cont-->

<?php
require 'meta_css.php';

?>

    <div  class="row  ">
                         <div class="col-xs-2"  style="width:5%;">
                             <img  id="logo" src="images/pellFourche.jpg">
                         </div>
                <div class="col-xs-1"  style="width: 10%;">

                </div>
                         <div   class="col-xs-4" style="text-align: center;width: 40%;" >
                                           <h2  style=" background-color: mediumorchid; ">ALUMINIUM</h2>
                                           <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                         </div>
                                  <div class="col-xs-1" style="width: 5%;">
                                  </div>
                                           <div class="col-xs-1"  style="width: 10%;" >
                                                 <button>
                                                         <a  href="aPropos.php"><h5>A PROPOS DU SITE</h5></a>
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
              <div  class="col-xs-4" style="width: 52%;">
                        <h4 style="color:white;">TRANSFORMATION DES DECHETS D'ALUMINIUM</h4><br>
                       <p>
                                       Les métaux tels que les canettes, les tôles rouillées;tous ce que nous<br> considérons comme
                                       de la ferraille ,sont récupérés.<br>

                              1) La première étape :
                                    Elle consiste a réaliser un moule;pour cela on<br>  découpe 4 morceaux de contre-plaqué avec des dimensions <br>
                                    proportionnelles à l’objet que nous désirons fabriquer. Nous les clouons<br>
                                            ensemble en formant un moule carré.<br><br>

                              2)la deuxième étape :
                                    On rempli ce moule en bois de sable fin,en veillant<br>  à ce que le sable soit compact.
                                    Lorsque le moule est<br>

                                    plein à ras;le talc est utilisé pour nous aider à séparer les deux parties<br>  du moule à l’ouverture.
                                    Creuser ensuite un canal <br>
                                    d’alimentation.On peut faire deux canaux pour assurer un bon remplissage.<br><br>

                              3)La troisième étape:
                                    pour fabriquer un four :<br>
                                   -Récupérer un vieux seau en plastique ,couper le fond pour faire un cylindre ;<br>
                                   l’entourer de scotch pour qu’il ne cède pas à la pression du béton. Mettez ce<br>  dernier à l’intérieur d’un seau métallique légèrement<br>
                                   plus grand .Coller les deux seaux.<br><br>


                              4)La quatrième étape:
                                   trouver une boîte cylindrique de diamètre inférieur à celui<br>  des deux seaux préparés;mettre ce cylindre à l’intérieur<br>
                                   du dispositif, après y avoir soudé deux bâtons en fer .<br><br>

                              5)La cinquième étape :
                                   faire un mélange de béton, comprenant : du ciment, du sable<br>  et du gravier pouzzolane ; verser
                                             le béton obtenu dans<br>
                                   l’espace entre le deux cylindre pour faire un cylindre en béton;  ensuite   y faire<br>  un trou
                                   d’aération .Ce trou servira à chauffer la ferraille;<br>
                                   laisser sécher…<br>
                                   Encastrer le cylindre en béton dans un cylindre préparé exprès .<br><br>

                              6)
                                   Au cas où  vous n’auriez pas un moule de l’objet à fabriqué, vous pourriez en fabriquer<br>  un en plastique, avec une imprimante 3D<br><br>

                              7)La septième étape:
                                    On fait fondre les métaux stockés; on verse ensuite la ferraille <br> fondue dans le trou laissé au dessus formé a sur<br>
                                    le sable compacté ,en veillant à ce que le flot d’aluminium  en fusion n’amène pas les<br>  grains de sable ans la pièce(pensez  à prévoir<br>
                                    un récipient pour mettre les excédants en lingots, qui pourront être refondus plus) .<br>  À haute température<br>
                                   -pour le sable de moulage : on prend pour 1kg de sable fin 0,10à 0,12kg  de bentonite<br>   et 0,03 à 0,05kg d’eau...<br><br>

                              8)Attention!!
                                    Ne pas faire un excès d’eau . Tout excès d’eau peut s’avérer catastrophiques?<br> risque d’explosion  et
                                    de blessures graves .<br>

                                    -on  retire les impuretés qui surnagent sur le bain d’aluminium. Comme lingotière, test<br>  préférable d’utiliser
                                     la forme conique. <br>
                                     Celle-ci permet un démoulage facile du lingot

                        </p>
              </div>
                                               <div  class="col-xs-4"  style="width: 20%">

                                                         <div>
                                                                 <h4 style="color:white;" >FAITES VOS COMMANDES</h4>
                                                         </div>
                                                         <div  class="I1 "  style="padding: 40px;">  canettes <br>
                                                                  <img  class="image" src="images/can.jpg"  >
                                                         </div><br><br>
                                                         <div  class="I1"  style="padding: 40px;">  dechets alu <br>
                                                                  <img class="image" src="images/Dech.jpg">
                                                         </div><br><br>
                                                         <div  class="I1"  style="padding: 40px;">  pièces auto <br>
                                                                  <img class="image" src="images/imagePiece.jpg">
                                                         </div><br><br>
                                                         <div  class="I1"  style="padding: 40px;">  casseroles en fonte <br>
                                                                  <img class="image" src="images/Macocottes3.jpg"  >
                                                         </div>

                                               </div>
                                                         <div  class="col-xs-1" style="width: 3%;">

                                                         </div>
                                       <div  class="col-xs-3"  style="width:25%; height: auto">
                                              <form  action ="pageAlu.php"  enctype="multipart/form-data"   method="post">
                                                                <h6 style="color:white;" >VOTRE NOM</h6>
                                                        <input class="form-control  input-lg"  type="text"  name="nom" value="" >
                                                                <h6 style="color:white;" >NOM DE L'ARTICLE</h6>
                                                        <input class="form-control  input-lg"  type="text"  name="nom_alu_art" value="" >
                                                                <h6 style="color:white;" >SON PRIX</h6>
                                                        <input class="form-control  input-lg"  type="number"  name="prix_alu_art" value="" >
                                                                <h6 style="color:white;" >COMBIEN EN VOULEZ VOUS?</h6>
                                                        <input class="form-control  input-lg"  type="number" name="nombre_alu_art" value="" >
                                                                <h6>VALIDEZ:</h6>
                                                        <input class="form-control  input-lg"  type="submit"  name="submit">
                                             </form>
                     <div  class="col-xs-12">
                                              <div  class="col-xs-2" style="height: 50px;" >

                                              </div>
                                               <div class="col-xs-2" style="height: 5px;">

                                               </div>

                             <div class="col-xs-2"  id="buttonSpace"  style="">
                                     <button onclick="clickMe();">cliquez pour voir nos prix</button>
                             </div>

                                       <div class="col-xs-6"  id="theBlock">
                                                         <div class= "carre" id="one">
                                                                      <h4>prix compétitifs</h4>
                                                         </div>
                                                          <div class= "carre" id="two">
                                                                      <h5>casserole<br>diamètres et couleurs <br>sur commandes</h5>
                                       </div>
                                               <div  class= "carre" id="tree">
                                                                      <h5>prix pièces:<br>de 10euros à 150 euros</h5>
                                               </div>
                                               <div  class= "carre" id="four">
                                                                      <h5>casseroles à des prix compétitfs</h5>
                                               </div>
                                               <div  class= "carre" id="five">
                                                                      <h5>boulons à 2eur*<br>ecrous à 2eur*<br>vis à 2eur*<br>nous vous proposons<br>
                                                                          des commnades sur<br> mesure pour vos<br> produits nous les<br> mettons également<br>
                                                                          en location pour<br> vos réceptions
                                                                      </h5>
                                               </div>
                                 </div>
                                            <div >
                                                           <h5>Casseroles:20euros/pièce
                                                           </h5><br><br>
                                                           <h5>Sur commande:<br>Boulons: <br> pièces(de 2 à10cm):<br> 2eur/pièce
                                                           </h5>
                                                         <h5>  calibre moyen
                                                              <br>(diamètre:10 à 40cm):<br>
                                                                  Entre 10 et 150eur
                                                         </h5><br><br>
                                                     <h5>
                                                              nous vous proposons<br> des commnades sur<br> mesure pour vos<br> produits nous les<br>
                                                               mettons également<br> en location pour<br> vos réceptions
                                                      </h5>
                                            </div>
                                  </div>

                     </div>
              </div>

     </div>
    <script src="script.js"></script>
</div>