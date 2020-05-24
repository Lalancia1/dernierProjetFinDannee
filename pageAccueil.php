<?php
session_start();
require "connection.php";
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");
/***********************************************************************************************************/

/************************************************************************************************/

         if (isset($_POST['submitCom']))
         {
                                           $designation_comm=$_POST['designation_comm'];
                                           $ref_comm=$_POST['ref_comm'];
                                           $nombre_comm=$_POST['nombre_comm'];
                                           $montant_comm=$_POST['montant_comm'];
                                           $civilite_user=$_POST['civilite_user'];
                                           $nom_user=$_POST['nom_user'];
                                           $prenom_user=$_POST['prenom_user'];
                                           $mail_user=$_POST['mail_user'];


                  if ((isset($civilite_user) && isset($nom_user) && isset($prenom_user) && isset($mail_user)  && isset($designation_comm))
                          && isset($ref_comm) && isset($nombre_comm) && isset($montant_comm) && !empty($civilite_user) && !empty($nom_user)
                          && !empty($prenom_user) && !empty($mail_user)&& !empty($nombre_comm)&& !empty($designation_comm)&& !empty($ref_comm)&& !empty($nombre_comm) && !empty($montant_comm))
                  {

                                                          echo  "<h6>votre commande a ";
                                                          echo" ";
                      $sd3= $conn->query("INSERT INTO `user`(id,civilite_user,nom_user,prenom_user,mail_user,nombre_comm) VALUES(NULL,'$civilite_user','$nom_user','$prenom_user','$mail_user','$nombre_comm')");
                                                        echo " bien été enregistrée,";
                                                        echo" ";
                      $sd3= $conn->query("INSERT INTO `command_user`(id,nom_user,designation_comm,ref_comm,nombre_comm,montant_comm) VALUES(NULL,'$nom_user','$designation_comm','$ref_comm','$nombre_comm','$montant_comm')");
                                                     echo "vous serez livré dans les 48h.</h6> ";
                                                  // echo "<br>";

                  }

         }
?>
<!DOCTYPE html>
<html lang="fr">
       <head>
              <title>Projet fin d'année</title>

                <?php require 'meta_css.php'; ?>
       </head>
<body>
<div class="container">
                        <div  class="col-xs-12  row">
                                      <div  class="col-xs-4"  style="width: 20%;">
                                                   <img  id="logo" src="images/pellFourche.jpg">
                                      </div>

                                                <div  class="col-xs-5" style="width:55%; text-align: center; ">
                                                                    <h2  style="background-color: mediumorchid;">RECUPERATION</h2><br>
                                                      <h5 id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                                                </div>
                                                                                      <div class="col-xs-1" style="width: 4%;"></div>
                                                       <div  class="col-xs-2"  style="width: 20%;">
                                                                      <P>Les payements se font par carte<br> bleu à la livraison.</P>
                                                       </div>
                        </div>


                                          <?php

                                                          require "entête.php";


                                                                 if( isset($_GET['id']))
                                                                 {
                                                                       $id = $_GET['id'];
                                                                       $sql="SELECT * FROM inscription WHERE id='$id'";
                                                                               $result = mysqli_query($conn, $sql);
                                                                             while($lignes = mysqli_fetch_assoc($result))
                                                                             {
                                                                                      $_SESSION['id'] = $lignes['id'];
                                                                                      $_SESSION['nom'] = $lignes['nom_user'];

                                                                             }
                                                                 }
                                                                               $_SESSION['id'] ;
                                                                               $_SESSION['nom'] ;



                                          ?>
                            <h5 id='bienvenu'>bienvenue <?=  $_SESSION['nom'] ?> vous êtes connectés à notre site </h5>

             <div class="col-xs-12  row"  style="width: auto">

                    <div class="col-xs-5"  style="width: 40%;">
                         <div style="" ><button><a  href="aPropos.php"><h5>A PROPOS DU SITE</h5></a></button></div>
                         <div ><img  id="dechet2" src="images/chuteTissus.jpg"><img  id="dechet6" src="images/masque2.jpg"><img id="dechet10"  src="images/sacTisse.jpg"></div>
                         <div ><img id="dechet3" src="images/compost2.jpg"><img id="dechet7" src="images/paille.jpg"><img id="dechet11" src="images/compost4_.jpg"> </div>
                         <div ><img id="dechet4" src="images/Dech.jpg"><img  id="dechet8" src="images/imagePiece.jpg"><img  id="dechet12" src="images/Macocottes3.jpg"></div>
                         <div ><img id="dechet5" src="images/copaux1.jpg"><img  id="dechet9" src="images/spatule2.jpg"><img  id="dechet13" src="images/meuble2.jpg"></div>
                    </div>
                                            <div  class="col-xs-2"  style="width: 2%;">

                                            </div>
                                <div  class="col-xs-2"  style="width: 30%">
                                            <h5  style="color:white;">   masques : 4euro/pièce; réf_masque:25;<br><br>sac tissé : 15eur/pièce<br>
                                                réf_sac:40<br<br>compost de 5kg:4eur<br>ref_sac compost:60<br>Désignation:couleur;<br>
                                                Casseroles:10eur<br>ref_casseroles:48<br>spatule iroko:<br>prix:10eur<br>
                                                ref_iroko:69<br>spatule bois blanc:1.5eur<br>ref_bois blanc:80<br>Désignation:type de bois<br>
                                                boulons_ref:8;<br>vis_ref:19<br>écrous_ref:22<br>désignation:type de pièce
                                            <h5>
                                </div>
                                       <div class="col-xs-1" style="width: 2%">

                                       </div>
                           <div  class="col-xs-2"  style="width: 25%;  color:white; text-align: center">
                                                           <h4>Designation  Références</h4>

                                  <div id="textil" style="background-color: lawngreen;">TISSUS<br>masques : 4euro/pièce;<br>sac tissé : 15eur/pièce</div><br>
                                  <div id="comp" style="background-color: lawngreen;">COMPOST<br>sacs de compost:4eur/sac</div><br>
                                  <div  id="auto" style="background-color: lawngreen;">ALUMINIUM<br>pièces grandes tailles:25eur<br>pièces petites tailles: 15eur<br>casseroles:10eur/pièce</div><br>
                                  <div  id="bois" style="background-color: lawngreen;width: 200px;">BOIS<br> spatules:1.5eur/pièce<br>meuble:150eur/pièce</div>

                           </div>
             </div>

          <div class="container">
                   <form    class="formulaire2"  action ="pageAccueil.php"  enctype="multipart/form-data"   method="post"  >

                             <div class="col-xs-12  row"  style="text-align: center;  color: white;">
                                        <div  class="col-xs-5">
                                                            <h4>UTILISATEUR(user)</h4><br>
                                                            <h5>CIVILITE</h5>
                                                 <input class="form-control  input-xs"  type="text" name="civilite_user" value="">
                                                            <h5 >VOTRE NOM:</h5>
                                                 <input class="form-control  input-xs"  type="text"  name="nom_user" value="">
                                                            <h5>VOTRE PRENOM:</h5>
                                                 <input class="form-control  input-xs"  type="text"  name="prenom_user" value="">
                                                            <h5>VOTRE E-MAIL:</h5>
                                                 <input class="form-control  input-xs"  type="email"  name="mail_user" value=""><br>
                                        </div>
                                                     <div class="col-xs-2" style="width: 40px;">

                                                     </div>

                                    <div  class="col-xs-5">
                                                                <h4>Commande de l'utilisateur</h4><br>
                                                                <h5>Désignation commandes</h5>(C'est le nom du produit que vous voulez)
                                             <input class="form-control  input-xs"  type="text"  name="designation_comm" value=""><br>
                                                                <h5>référence  de la commande </h5>

                                             <input class="form-control  input-xs"  type="number" name="ref_comm" value="">
                                                                <h5>Quantité d'objets</h5>
                                             <input class="form-control  input-xs"  type="number" name="nombre_comm" value="">
                                                                <h5>montant  commande</h5>
                                             <input class="form-control  input-xs"  type="number"  name="montant_comm" value="">

                                                                <h3>VALIDEZ:</h3>
                                             <input class="form-control  input-xs"  type="submit"  name="submitCom" >

                                     </div>
                             </div>

                   </form>
          </div>                                    <script src="script.js"></script>
</div>
</body>
