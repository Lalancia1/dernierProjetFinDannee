<?php
session_start();
require "connection.php";
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");
/***********************************************************************************************************/
require "entête.php";
?>
 <button><a  href="affichageCommande.php">affichage des commandes</a></button>
<?php
/************************************************************************************************/


                                             if (isset($_POST['submit1']))
                                             {
                                                     $nom_client= $_POST['nom_client'];
                                                     $civilite_client= $_POST['civilite_client'];
                                                     $prenom_client= $_POST['prenom_client'];
                                                     $mail_client= $_POST['mail_client'];
                                                     $designation_art= $_POST['designation_art'];
                                                     $modele_art= $_POST['modele_art'];
                                                     $taille_art= $_POST['taille_art'];
                                                     $prix_art= $_POST['prix_art'];
                                                     $num_com= $_POST['num_com'];
                                                     $montant_com= $_POST['montant_com'];
                                                     $designation_com= $_POST['designation_com'];
                                                     $detail_com= $_POST['detail_com'];
                                                     $detail_ref= $_POST['detail_ref'];
                                                     $detail_qte= $_POST['detail_qte'];


                if (( isset($civilite_client) && isset($nom_client) && isset($prenom_client) &&  isset($mail_client))
                    && !empty($civilite_client) && !empty($nom_client) && !empty($prenom_client) &&  !empty($mail_client) && !empty($prix_art))
{                                        echo "<h6>Votre client"." ";

        $sd1=$conn->query("INSERT INTO `client`(id,civilite_client,nom_client,prenom_client,mail_client) VALUES(NULL,'$civilite_client','$nom_client','$prenom_client','$mail_client')");

}
                                            echo "a été ,"." ";
    /******************************************ARTILES***************************************************************************/
                 if ((isset($nom_client) && isset($designation_art) && isset($modele_art) && isset($taille_art) && isset($prix_art))
                     && !empty($nom_client) && !empty($designation_art) && !empty($modele_art) && !empty($taille_art) && !empty($prix_art))
    {
                                           echo "avec sa commande"." ";
         $sd1 = $conn->query("INSERT INTO `articles`(id,nom_client,designation_art,modele_art,taille_art,prix_art) VALUES(NULL,'$nom_client','$designation_art','$modele_art','$taille_art','$prix_art')");
    }
                                              echo " enregistré ,"." ";
   /*************************************************************************************************************************/

                 if ((isset($nom_client) && isset($num_com) && isset($montant_com) && isset($designation_com)  && isset($detail_ref))
                    && !empty($nom_client) && !empty($num_com) && !empty($montant_com) && !empty($designation_com)  && !empty($detail_ref))
    {
                                              echo " doit t-il ". " ";

          $sd3= $conn->query("INSERT INTO `commande`(id,nom_client,num_com,montant_com,designation_com,detail_ref) VALUES(NULL,'$nom_client','$num_com','$montant_com','$designation_com','$detail_ref')");

                                               echo " être affiché dans cette page?"."  ";

    }

                 if ((isset($nom_client) && isset($detail_com) && isset($detail_ref) && isset($detail_qte))
                     && !empty($nom_client) && !empty($detail_com) && !empty($detail_ref) && !empty($detail_qte) )
    {
                                               echo " SI OUI, alors remplissez à nouveau "." ";


          $sd4= $conn->query("INSERT INTO `detail`(id,nom_client,detail_com,detail_ref,detail_qte) VALUES(NULL,'$nom_client','$detail_com','$detail_ref','$detail_qte')");
                                               echo " ses informations  S.V.P." ." </h6>";

    }

                                                }
/*******************************************archiv*********************************************/

echo"<br>";


                      $client='SELECT * FROM client JOIN commande ON client.id = commande.id AND client.nom_client=commande.nom_client';


                                          $ret = mysqli_query ($conn,$client) or die (mysqli_error ($conn));

                                                       while ( $col = mysqli_fetch_assoc ($ret) )
{

?>

                                        <table>
                                <tr  style=" ">
                       <td  style=" border:1px  solid yellow;">
                <?php
                     echo "<pre>".$col['id'] ."  ".$col['civilite_client']." ".$col['nom_client']." ".$col['prenom_client']."   "."Désignation commande:"."  ".$col['designation_com']."     "
                    ."montant commande:"."  ".$col['montant_com']."   "."détail référence:"."  ".$col['detail_ref']. "  "."date:".$col['date']."</pre>";

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

<body>
      <div  class="container"  style="color: white;">
          <h6>*seuls les  clients déjà présents dans la base de données pourront être affichés dans cette page.</h6>
                 <div class="col-lg-12  row"  style="text-align: center;">
                                        <div  class="col-xs-6" style="width: 200px;">
                                        </div>

                           <div  class="col-xs-6"  style="background-color: darkorange;">     <h4  >ARCHIVEZ LES INFORMATIONS SUR  VOS CLIENTS POUR PLUS TARD </h4>
                                                                    <h6>ON NE SAIT JAMAIS, REMPLISSEZ LE FORMULAIRE :</h6>
                           </div>
                 </div>               <br><br>


                 <form    class="formulaire2"  action ="archivCommand.php"  enctype="multipart/form-data"   method="post"  >
                         <div class="col-lg-12  row"  style="background-color: darkgrey; width:100%; height: 500px;">
                                            <div  class="col-lg-3" style="width:20% ">
                                                                                <h4>CLIENT</h4><br>
                                                                                <h5>CIVILITE</h5>
                                                  <input class="form-control  input-lg"  type="text" name="civilite_client" value="">
                                                                                <h5 >VOTRE NOM:</h5>
                                                  <input class="form-control  input-lg"  type="text"  name="nom_client" value="">

                                                                               <h5>VOTRE PRENOM:</h5>
                                                  <input class="form-control  input-lg"  type="text"  name="prenom_client" value="">
                                                                               <h5>VOTRE E-MAIL:</h5>
                                                  <input class="form-control  input-lg"  type="email"  name="mail_client" value=""><br>
                                            </div>

                                   <div  class="col-lg-3" style="width:20% ">
                                                            <h4>ARTICLES</h4><br>
                                                      <h5>designation de l'article</h5>
                                          <input class="form-control  input-lg"  type="text"  name="designation_art" value="">
                                                      <h5>modele de l'article</h5>
                                          <input class="form-control  input-lg"  type="text" name="modele_art" value="">
                                                      <h5>taille de l'article</h5>
                                          <input class="form-control  input-lg"  type="number"  name="taille_art" value="">
                                                      <h5>prix de l'article</h5>
                                          <input class="form-control  input-lg"  type="number"  name="prix_art" value=""><br>
                                   </div>

                         <div  class="col-lg-3"  style="width:20% ">
                                                    <h4>COMMANDE</h4><br>

                                                    <h5>Numéro commande</h5>
                                   <input class="form-control  input-lg"  type="number" name="num_com" value="">
                                                    <h5>montant_commandes</h5>
                                   <input class="form-control  input-lg"  type="number"  name="montant_com" value="">
                                                   <h5>Désignation des commandes(marques,type)</h5>

                                   <input class="form-control  input-lg"  type="text"  name="designation_com" value=""><br>

                         </div>

                                   <div class="col-lg-3"  style="width:20% " >
                                                                    <h4>DETAIL</h4><br>
                                                                    <h5>detail commandes en carton ou en sac</h5>
                                           <input class="form-control  input-lg"  type="number" name="detail_com" value="">
                                                                    <h5>Detail reference</h5>
                                           <input class="form-control  input-lg"  type="number"  name="detail_ref" value="">
                                                                     <h5>Detail quantité</h5>
                                           <input class="form-control  input-lg"  type="number"  name="detail_qte" value=""><br>
                                                                     <h3>VALIDEZ:</h3>
                                           <input class="form-control  input-lg"  type="submit"  name="submit1" >

                                   </div>
                         </div>
                 </form>


      </div>

<script src="script.js"></script>

</body>

