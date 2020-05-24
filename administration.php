<?php
session_start();
require "connection.php";
$connectdb= mysqli_select_db($conn,'projet_fin_formation') or die(" la connection à la base de donnée a échoué");


if(isset($_POST['submit4'])){

    $nom_admin=$_POST['nom_admin'];
    $prenom_admin=$_POST['prenom_admin'];
    $pwd_admin=$_POST['pwd_admin'];
    $mail_admin=$_POST['mail_admin'];
    if (isset($nom_admin) && isset($prenom_admin) && isset($pwd_admin) && isset( $mail_admin) && !empty($nom_admin)
        && !empty($prenom_admin) && !empty($pwd_admin) && !empty( $mail_admin))
    {
        $linsertion= ("INSERT INTO `administration`(id,nom_admin,prenom_admin,pwd_admin,mail_admin) VALUES(NULL,'$nom_admin','$prenom_admin','$pwd_admin','$mail_admin')");
        $rendu= mysqli_query($conn,$linsertion);
    }
    if($rendu){
        echo "<h5>veuillez confirmer votre nom et mot de passe</h5><br>";
    }else{
        echo "<h5> veuillez recommencez svp</h5><br>";
    }
}

/********************************************admin***********************/
if(isset($_POST['submit5'])){
    $conf_nom_admin=$_POST['conf_nom_admin'];
    $conf_pwd_admin=$_POST['conf_pwd_admin'];

        if (isset($conf_nom_admin ) &&  isset($conf_pwd_admin) && !empty($conf_nom_admin) && !empty($conf_pwd_admin)) {
     echo "BONJOUR";
            $sql="SELECT * FROM administration WHERE  pwd_admin='$conf_pwd_admin ' AND nom_admin='$conf_nom_admin'";

            $result = mysqli_query($conn, $sql);
           // var_dump($result->num_rows);
            $nombreDLignes = $result->num_rows;

            if($nombreDLignes>0){
                while($lignes = mysqli_fetch_assoc($result))
                {
                    $_SESSION['id'] = $lignes['id'];
                    $_SESSION['$conf_pwd_admin'] = $lignes['pwd_admin'];
                    $_SESSION['$conf_nom_admin'] = $lignes['nom_admin'];
                }

                header("location:economie.php?id=" . $_SESSION['id']);
            }
            else{
                echo "<h4 style='color: white;' >vous n'êtes pas autorisés à accéder à cette administration<br>veuillez vous inscrire svp</h4>";
            }
        }



}
?>

<body> <div  class="row  col-xs-12">
    <div class="col-xs-4">
        <img  id="logo" src="images/pellFourche.jpg">
    </div>
    <div class="col-xs-2" style="width: 350px;">

    </div>
    <div   class="col-xs-6" >
        <h4 style=" background-color: mediumorchid; ">ADMINISTRATION</h4>

    </div>
</div><br>

<?php
require "entête.php";

?>

<br><br>
<div class="container" id="formAdmin"><!--je met le formulaire  qui donnera accès cette page-->
      <div  class="row">

                  <div class="col-xs-6"  style="width: 40%" >
                                                       <h5  >INSCRIPTION</h5>
                           <form class="formulaireAccesAdmin" action ="administration.php"  enctype="multipart/form-data"   method="post">

                                                    <h6 >Nom de l'administrateur:</h6>
                                 <input class="form-control  input-lg"  type="text"  name="nom_admin" value="" >

                                                   <h6 >Prénom de l'administrateur:</h6>
                                 <input class="form-control  input-lg"  type="text"  name="prenom_admin" value="" >
                                                      <h6  >Votre mot de passe:</h6>
                                 <input class="form-control  input-lg"  type="password"  name="pwd_admin" value="" >

                                                           <h6 >Votre mail:</h6>
                                 <input class="form-control  input-lg"  type="email"  name="mail_admin" value="" >
                                                             <h6  >VALIDEZ:</h6>
                                 <input class="form-control  input-lg"  type="submit"  name="submit4" >
                           </form>

                  </div>
          <div class="col-xs-2"  style="width: 15%" >

          </div>
          <div class="col-xs-4"  style="width: 35%" >
              <h5>CONFIRMATION:</h5><br>
              <h5  >PAR MESURE DE SECURITE FAITES A NOUVEAU VOTRE MOT DE PASSE.</h5>
              <h6  style='color: white;' >Mot de passe oublié?<br>veuillez vous réinscrire svp.</h6>
              <form  action ="administration.php"  enctype="multipart/form-data"   method="post"  style="width: 45%;"  >
                    <h5>votre nom</h5>
                  <input class="form-control  input-lg"  type="text"  name="conf_nom_admin" value="" >
                  <h5>votre mot de passe</h5>
                  <input class="form-control  input-lg"  type="password"  name="conf_pwd_admin" value="" >
                  <h6 style='color: white;' >VALIDEZ:</h6>
                  <input class="form-control  input-lg"  type="submit"  name="submit5" >
              </form>
          </div>
      </div>
</div>
</body>
