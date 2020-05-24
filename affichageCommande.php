
<?php
session_start();

require "entête.php";
require "connection.php";
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");

?>
<button><a  href="archivCommand.php">archive des clients</a></button>
<?php


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


    if ((isset($civilite_user) && isset($nom_user) && isset($prenom_user) && isset($mail_user)  && isset($designation_comm)) && isset($ref_comm)
                  && isset($nombre_comm) && isset($montant_comm) && !empty($civilite_user) && !empty($nom_user)
                  && !empty($prenom_user) && !empty($mail_user)&& !empty($nombre_comm)&& !empty($designation_comm)&& !empty($ref_comm)&& !empty($nombre_comm) && !empty($montant_comm))
           {
                                                      echo "je suis insérer dans user";
                                                      echo  "<br>";
                 $sd3= $conn->query("INSERT INTO `user`(id,civilite_user,nom_user,prenom_user,mail_user,nombre_comm) VALUES(NULL,'$civilite_user','$nom_user','$prenom_user','$mail_user','$nombre_comm')");
                                                     echo $sd3;"<br>";
                 $sd3= $conn->query("INSERT INTO `command_user`(id,nom_user,designation_comm,ref_comm,nombre_comm,montant_comm) VALUES(NULL,'$nom_user','$designation_comm','$ref_comm','$nombre_comm','$montant_comm')");
                                                     echo "je   suis inséree dans command_user ";
                                                     echo "<br>";

           }
}



/**************************************************/


                                        $comm='SELECT * FROM user  JOIN command_user ON user.id = command_user.id';

                                        $ret = mysqli_query ($conn,$comm) or die (mysqli_error ($conn));
                           while ( $col = mysqli_fetch_assoc ($ret) )
{
?>

                       <table>
                       <tr  style=" ">
                       <td  style=" border:1px  solid yellow;">
      <?php
                 echo "<pre>".$col['id']."  "."NOM:".$col['civilite_user']."  ".$col['nom_user']." ".$col['prenom_user']."    "."e-mail:"."  ".$col['mail_user']."    "."Désignation:"."  ".$col['designation_comm']."     "."Référence commande:"."  ".$col['ref_comm']."   "."Nombre de commandes:"."  ".$col['nombre_comm']."  "."Montant:"."   ".$col['montant_comm']." ".$col['date']."</pre>";

      ?>
                      </td>
                      </tr>
                      </table>
<?php
}
?>



<!DOCTYPE html>
<html lang="fr">

                 <head>
                         <title>Projet fin d'année</title>

                         <?php require 'meta_css.php'; ?>
                 </head>
<div  class="container">
          <form    class="formulaire2"  action ="affichageCommande.php"  enctype="multipart/form-data"   method="post"  style="visibility: hidden">

                    <div class="col-xs-12  row"  style="text-align: center;">
                               <div  class="col-xs-5">
                                                              <h4>CLIENT</h4><br>
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
                                                              <h4>COMMANDE</h4><br>
                                                        <h5>Désignation des commandes</h5>
                                     <input class="form-control  input-xs"  type="text"  name="designation_comm" value=""><br>
                                                        <h5>Numéro commande</h5>
                                     <input class="form-control  input-xs"  type="number" name="ref_comm" value="">
                                                        <h5>Nombre de commande</h5>
                                     <input class="form-control  input-xs"  type="number" name="nombre_comm" value="">
                                                       <h5>montant  commande</h5>
                                     <input class="form-control  input-xs"  type="number"  name="montant_comm" value="">

                                                        <h3>VALIDEZ:</h3>
                                     <input class="form-control  input-xs"  type="submit"  name="submitCom" >

                            </div>
                    </div>

          </form>

                            <script src="script.js"></script>
</div>
</body>
</html>
