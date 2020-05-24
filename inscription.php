<?php
session_start();
require "connection.php";
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");

/*********************************************inscription**************submit2************************/

if(isset($_POST['submit2']))
{

                                    $nom_user=$_POST['nom_user'];
                                    $prenom_user=$_POST['prenom_user'];
                                    $pwd_user=$_POST['pwd_user'];
                                    $mail_user=$_POST['mail_user'];
                     if (isset($nom_user) && isset($prenom_user) && isset($pwd_user) && isset( $mail_user) && !empty($nom_user)
                                                 && !empty($prenom_user) && !empty($pwd_user) && !empty( $mail_user))
         {
                 $requete= "INSERT INTO `inscription`(id,nom_user,prenom_user,pwd_user,mail_user) VALUES(NULL,'$nom_user','$prenom_user','$pwd_user','$mail_user')";
                  $response= mysqli_query($conn,$requete);
         }
                                     if($response)// S'il est connecté à la base de données
                               {
                                                  echo "<h5>vous êtes inscrits dans notre site avec succès!</h5><br>";
                               }
}

/***********************************************connection****************submit3****************/

if(isset($_POST['submit3']))
{
                        $pwd_connecte=$_POST['pwd_connecte'];
                        $mail_connecte=$_POST['mail_connecte'];

                         if (isset( $pwd_connecte) && isset( $mail_connecte) && !empty($pwd_connecte) && !empty($mail_connecte))
                {
                                             echo "bonjour";
                                  $sql="SELECT * FROM inscription WHERE pwd_user ='$pwd_connecte' AND mail_user ='$mail_connecte'";

                                  $result = mysqli_query($conn, $sql);
                                    // var_dump($result->num_rows);
                                  $nombreROW = $result->num_rows;// num_row me permet de savoir le nombre de fois que l'utilisateur est dans la base de donnée
                                       // echo $nombreROW;
                         if($nombreROW>0)
                         {
                                             while($lignes = mysqli_fetch_assoc($result))
                                         {
        /* si le nombre de lignes  renvoyé par rapport au select est supérieur à 0, fais moi une instruction dans laquelle l'id de la session
 est égale à l'id de l'utilisateur récupéré dans une ligne du tableau renvoyé*/
                                                          $_SESSION['id'] = $lignes['id'];
                                                          $_SESSION['nom'] = $lignes['nom_user'];

                                         }

                              header("location:pageAccueil.php?id=" . $_SESSION['id']);//  affiche dans l'url l'id = l'id de la session
                         }

                      else{                        //si l'utilisateur n'est pas dans la base de donnée, donc $nombreRow=0, fais moi cette echo
                                   echo "<h4>vous n'êtes pas inscrits dans notre site.<br> veuillez vous inscrire svp</h4>";
                          }
                }
}



?>

<!DOCTYPE html>
<html lang="fr">
             <head>
                         <title>Projet fin d'année</title>

                             <?php require 'meta_css.php'; ?>
             </head>
<header>

    <div class="container"  style="width: auto">
             <div  class="  row" >
                            <div  class="col-xs-4">
                                      <img  id="logo" src="images/pellFourche.jpg">
                            </div>
                                       <div  class="col-xs-6"  style="width: 500px;">

                                       </div>

                     <div  class="col-xs-6" >
                           <h2  style="background-color: mediumorchid;width: 260px;">RECUPERATION</h2><br>
                           <h5 id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                     </div>
             </div>
                                       <div style="height: 40px; ">

                                       </div>     <!--**************************************connecte*****************************-->

             <div class="row    col-xs-12">
                             <div  class="col-xs-4"  style="width: 20%;height: 20%">
                                                                     <h5 >CONNECTEZ-VOUS:</h5>
                                         <form  class="formulaire2 form-control  input-xs"  action="inscription.php"  enctype="multipart/form-data" method="post">
                                                                <h6>VOTRE E-MAIL:</h6>
                                                     <input class="form-control  input-xs"  type="email"  name="mail_connecte" value="">
                                                                     <h6>VOTRE MOT DE PASSE</h6>
                                                     <input class="form-control  input-xs"  type="password"  name="pwd_connecte" value="">
                                                                     <h6>VALIDEZ:</h6>
                                                   <input class="form-control  input-xs"  type="submit" name="submit3" >

                                         </form>
                             </div>

                                                        <div  class="col-xs-1" style="width: 10%">

                                                        </div>
<!--***********************************************inscription********************************-->


                       <form   class="formulaire1"  action="inscription.php"  enctype="multipart/form-data"   method="post"  style="width: 30%;">
                                                                     <h5 >INSCRIVEZ-VOUS </h5><br><br>
                                   <div  class="col-xs-3">
                                                                       <h6 >VOTRE NOM:</h6>
                                             <input class="form-control  input-xs"  type="text"  name="nom_user" value="">

                                                                       <h6>VOTRE PRENOM:</h6>
                                             <input class="form-control  input-xs"  type="text"  name="prenom_user" value="">
                                                                      <h6>VOTRE MOT DE PASSE</h6>
                                             <input class="form-control  input-xs"  type="password"  name="pwd_user" value="">
                                                                       <h6>VOTRE E-MAIL:</h6>
                                             <input class="form-control  input-xs"  type="email"  name="mail_user" value="">
                                                                        <h6>VALIDEZ:</h6>
                                             <input class="form-control  input-xs"  type="submit"  name="submit2" >
                                   </div>
                       </form>

                                                       <div  class="col-xs-1"  style="width: 10%">

                                                       </div>

   <!--*********************************************mot de passe oublIé***********************************************-->
                                      <div  class="col-xs-3" style="color: white;  width: 10%">
                                                              <h6 >mot de passe oublié? </h6><br>
                                                  <h6 >VEUILLEZ S'IL VOUS PLAIT VOUS  REINSCRIRE </h6>
                                      </div>
             </div>
    </div>
</header>