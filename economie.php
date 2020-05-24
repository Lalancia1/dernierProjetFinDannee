

 <header>
<div class="container" style="text-align: center"><!--cont-->
    <?php

    require 'meta_css.php';

    ?>

           <div  class="row  col-xs-12">
                                             <div class="col-xs-2">
                                                       <img  id="logo" src="images/pellFourche.jpg">
                                             </div>
                                 <div class="col-xs-2" style="width: 20px;">

                                 </div>

                                        <div  class="col-xs-1" style="">
                                                                       <h5  style="background-color: darkgrey;font-weight: normal; " >
                                                  <a  href="archivCommand.php">cliquez <br>archivage des <br>commandes du client</a></h5>

                                        </div>
                         <div  class="col-xs-1"  style="width: 2px;">

                         </div>

                                  <div   class="col-xs-4"  style="text-align: center;" >
                                                <h2  style=" background-color: lightsalmon;  color: white "> GEREZ VOS FINANCES<br> SANS FAUTES</h2>
                                          <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES,FAITES DES ECONOMIES</h5>
                                  </div>
                                             <div  class="col-xs-1" style="width:40px;">

                                             </div>
                         <div  class="col-xs-1">
                              <h5  style="background-color: darkgrey;  color: white; font-weight: normal; " ><a  href="affichageCommande.php">cliquez <br>affichage <br>des commandes</a></h5>

                         </div>

           </div><br>
           <?php
                 require "entête.php";
           ?>

                                                     <div class="row" id="texte1">
                                                            <div class="col-sm-3">RECETTES</div>
                                                            <div class="col-sm-3">DEPENSES</div>
                                                            <div class="col-sm-3">EPARGNE</div>
                                                            <div class="col-sm-3">RESULTAT</div>
                                                     </div>

           <div class="row">
                  <div   id="recettes" class="col-lg-3" >

                                                      <span>RENTREZ TOUS VOS REVENUS
                                                          <a href="#ancre">
                                       <button id="btnRevenu" type="button">
                                                     CLIQUEZ ICI POUR PLUS BAS DANS LA PAGE
                                       </button>
                                                          </a>
                                                      </span>
                        <ul class="col-xs-12">
                             <li class="col-xs-6" id="votreSalaire">VOS SALAIRES <input class="form-control  input-lg" id="InputSalaire" type="number" value=""></li>
                             <li class="col-xs-6" id="vosAllocation">VOS ALLOCATIONS<input class="form-control input-lg " id="InputAllocation" type="number" value=""></li>
                        </ul>
                                                                    <span>VOS AUTRES REVENUS</span>
                        <ul class="list-unstyled">
                              <li class="row" >COMPLEMENT1
                                  <input class="form-control  input-lg" id="InputComplement1" type="number" value="">
                              </li><br>
                              <li class="row">COMPLEMENT2
                                  <input class="form-control  input-lg" id="InputComplement2" type="number" value="">
                              </li> <br>
                              <li class="row">COMPLEMENT3
                                  <input class="form-control  input-lg" id="InputComplement3" type="number" value="">
                              </li><br>
                              <li class="row" >COMPLEMENT4
                                  <input class="form-control  input-lg" id="InputComplement4" type="number" value="">
                              </li> <br>
                              <li class="row">ENTREES COMPOST
                                  <input class="form-control  input-lg" id="InputComplement5" type="number" value="">
                              </li><br>
                              <li class="row" >ENTREES TEXTILES
                                  <input class="form-control  input-lg" id="InputComplement6" type="number" value="">
                              </li> <br>
                              <li class="row">ENTREES ALU
                                  <input class="form-control  input-lg" id="InputComplement7" type="number" value="">
                              </li><br>
                              <li class="row" >ENTREE BOIS
                                  <input class="form-control  input-lg" id="InputComplement8" type="number" value="">
                              </li>
                        </ul>
                                         <div  class="row col-sm-12" style="margin-bottom: 20px;">
                                                  <div class="col-sm-5" id="recettesSpan"> T_revenu</div>
                                                  <div  class="col-sm-2" style="width: 1px;"  ></div>
        <!--divTOTAL-->                           <div class="col-sm-5" id="totalRevenus"> 0 </div>
                                         </div>

                  </div><!--deuxième carrée-->

                        <div   id="depenses" class="col-lg-3">
                               <div id="chargesFixes">
                                                                <span>CHARGES FIXES</span>
                                       <ul class="list-unstyled">
                                              <li class="row" id="loyer">LOYER
                                                      <input  class="form-control  input-lg" id="InputLoyer" type="number" value="">
                                               </li>
                                              <li  class="row"  id="liEauElectricite">EAU + ELECTRICITE=
                                                      <input class="form-control  input-lg" id="InputEauElect" type="number" value="">
                                              </li>
                                              <li  class="row" id="GazCourant">GAZ + COURANT=
                                                      <input class="form-control  input-lg" id="InputGazCourant" type="number" value="">
                                              </li>
                                              <li  class="row" id="totalAssurances">ASSURANCES_TOTAL=
                                                      <input class="form-control  input-lg" id="InputAssurance" type="number" value="">
                                              </li>
                                              <li  class="row" id="totalMutuelle">MUTUELLE_TOTAL=
                                                      <input class="form-control  input-lg"id="InputMutuelle" type="number" value="">
                                              </li>
                                              <li  class="row" id="totalImpot">IMPOTS_TOTAL=
                                                      <input class="form-control  input-lg" id="InputIMPOT" type="number" value="">
                                              </li>
                                              <li  class="row" id="telephoneInternet">TELEPHONE + INTERNET
                                                      <input class="form-control  input-lg" id="InputTelephInternet" type="number" value="">
                                              </li>
                                              <li  class="row" id="totalTaxes">TOTAL_TAXES
                                                      <input class="form-control  input-lg" id="InputTaxe" type="number" value="">
                                              </li>
                                              <li  class="row" id="lesCredits">CREDITS
                                                      <input class="form-control  input-lg" id="InputCredit" type="number" value="">
                                              </li>
                                       </ul>
                               </div>

                                    <div id="depenseCourante">**DEPENSES COURANTES
                                <!--     <a href="#ancre"><button id="btnDepenseCourantes" type="button" >CLIQUEZ ICI</button></a>-->
                                           <ul class="list-unstyled">
                                                   <li  class="row" id="courses">COURSES
                                                          <input class="form-control  input-lg" id="InputCourse" type="number" value="">
                                                   </li>
                                                   <li  class="row" id="essences">ESSENCES
                                                          <input class="form-control  input-lg" id="InputEssence" type="number" value="">
                                                   </li>
                                                   <li  class="row" id="transport">TRANSPORT
                                                          <input class="form-control  input-lg" id="InputTransport" type="number" value="">
                                                   </li>
                                                   <li  class="row" id="activiteSportive">ACTIVITES  CULTURELLES
                                                          <input class="form-control  input-lg" id="InputSportive" type="number" value="">
                                                   </li>
                                                   <li  class="row" id="vacance">VACANCES ET SORTIE
                                                          <input class="form-control  input-lg" id="InputVacances" type="number" value="">
                                                   </li>
                                           </ul>
                                    </div><br><br>

                                         <div  class=" row col-sm-12">
                                                <div  class="col-sm-5" id="depensesSpan" >Total dépenses
                                                </div>
                                                <div  class="col-sm-2"  style="width: 1px;">

                                                </div>
                                                <div class="col-sm-5" id="totalDepenses">

                                                </div>
                                         </div>
                        </div>
               <!---->

                                   <div id="epargnes" class="col-lg-3">
        <!--**************************************epargne affichage****************************************************-->
                                                         <div id="affiche1">
                                                         </div>
                                                         <div id="affiche2">
                                                         </div>
                                                         <div id="affiche3">
                                                         </div>
                                                         <div id="affiche4">
                                                         </div> <br><br>
                                             <div class="  row   col-sm-12">
                                                   <div class="col-sm-5" id="epargnesSpan" >
                                                                        TOTAL EPARGNE
                                                   </div>
                                                    <div  class="col-sm-2"  style="width: 1px;">
                                                    </div>
                                                    <div  class="col-sm-5" id="totalEpargne">
                                                    </div>
                                             </div>

                                   </div>
    <!--*********************************************result-->
                                        <div  id="resultat" class="col-lg-3">

                                                 <div id="affichResult1">
                                                 </div>
                                                 <div id="affichResult2">
                                                 </div>
                                                 <div id="affichResult3">
                                                 </div>
                                        </div>
                                                                         <!--</div>-->
                                  <div class="row  col-sm-12" id="boutonsValidation">
                                           <div  class="col-sm-3" ><button id="touchRecettes">CLICK-RECETTES</button>
                                           </div>
                                           <div  class="col-sm-3"><button id="touchDepenses">CLICK-DEPENSES</button>
                                           </div>
                                           <div  class="col-sm-3"><button id="touchEpargne">CLICK-EPARGNE</button>
                                           </div>
                                           <div  class="col-sm-3"><button id="touchResultat">CLICK-RESULTAT</button>
                                  </div>
           </div>

</div>
 </header><br><br><br>


 <footer>
     <div class=" col-sm-12  align-items-start  ">
                                         <span class="  align-items-start" style="display-inside: ruby-text-container;line-height: inherit;">**veuillez s'il vous plaît remplir tous les champs pour
                                                faire vos totaux,et les reporter sur la première page si besoin.
                                                Les cases vides pourront être remplies d'un 0(zéro);

                                         </span>

     </div>
<div id="texte2">
        <span >FAITES VOS COMPTES DANS LES DETAILS</span>
    </div>

<div  id="troisiemePage" class="container" >

    <div class="row  col-lg-12">

          <div id="semaineCourse" class="col-lg-3">
                        <div class=" col-sm-12"><span>COURSES</span></div>

                                                   <div class="text-left-xs " id="weekCourse1">SEMAINE1</div>
                              <input class="form-control  input-lg" id="inputSemaine1" type="number">

                                                    <div class="text-left-xs " id="weekCourse2">SEMAINE2</div>
                              <input class="form-control  input-lg" id="inputSemaine2" type="number">

                                                   <div class="text-left-xs "  id="weekCourse3">SEMAINE3</div>
                              <input class="form-control  input-lg" id="inputSemaine3" type="number">

                                                  <div class="text-left-xs " id="weekCourse4">SEMAINE4</div>
                              <input class="form-control  input-lg" id="inputSemaine4" type="number">
                                 <br>

                                <div class=" col-sm-12 text-left-xs  " id="weekTotalCourse">TOTAL COURSE=<div id="CalculCourse"></div>
                                </div>

                                    <div class=" col-sm-12  align-items-start  ">


                                     </div>
          </div>
<!--********************************************************************************-->
         <div id="semaineEssences" class="col-lg-3">
                               <div class="col-sm-12">
                                                    <span id="ancre">ESSENCE</span>
                               </div>
                               <div >
                                                  <div  id="weekEssence1">SEMAINE1</div>
                                       <input class="form-control  input-lg" id="inputSemaineA" type="number">
                               </div>

                               <div >
                                                  <div  id="weekEssence2">SEMAINE2</div>
                                       <input class="form-control  input-lg" id="inputSemaineB" type="number">
                               </div>

                               <div >
                                                  <div  id="weekEssence3">SEMAINE3</div>
                                       <input class="form-control  input-lg" id="inputSemaineC" type="number">
                               </div>

                               <div >
                                                   <div  id="weekEssence4">SEMAINE4</div>
                                    <input class="form-control  input-lg" id="inputSemaineD" type="number">
                               </div><br>

                                 <div  class="col-sm-12" id="weekTotalEssence">TOTAL ESSENCE=<div id="CalculEsssence" ></div></div>
         </div>
         <div id="semaineTransport" class="col-lg-3">
                       <div class="col-sm-12" > <span>TRANSPORT</span></div>
                                     <div>
                                                     <div  id="weekTransport1">SEMAINE1</div>
                                            <input class="form-control  input-lg" id="inputSemaineE" type="number">
                                     </div>
                               <div>
                                                    <div  id="weekTransport2">SEMAINE2</div>
                                     <input class="form-control  input-lg" id="inputSemaineF" type="number">
                               </div>
                                      <div>
                                                    <div id="weekTransport3">SEMAINE3</div>
                                            <input class="form-control  input-lg" id="inputSemaineG" type="number">
                                      </div>
                               <div>
                                                     <div  id="weekTransport4">SEMAINE4</div>
                                       <input class="form-control  input-lg" id="inputSemaineH" type="number">
                               </div><br>

                            <div  class="col-sm-12" id="weekTotalTransport">TOTAL TRANSPORT=<div  id="CalculTransport"></div></div>
         </div>
         <div id="semaineSortie" class="col-lg-3">
                              <div class="col-sm-12"> <span>SORTIES OU ACTIVITES </span></div>
               <div class="col-sm-12">
                                            <div id="weekSortie1">SEMAINE1</div>
                           <input class="form-control  input-lg" id="inputSemaineI" type="number">
               </div>
               <div>
                                            <div  id="weekSortie2">SEMAINE2</div>
                            <input class="form-control  input-lg"   id="inputSemaineII" type="number">
               </div>
               <div >
                                            <div  id="weekSortie3">SEMAINE3</div>
                           <input class="form-control  input-lg"  id="inputSemaineIII" type="number">
               </div>
               <div>
                                            <div  id="weekSortie4">SEMAINE4</div>
                           <input class="form-control  input-lg"   id="inputSemaineIV" type="number">
               </div><br>
                           <div class="col-sm-12" id="weekTotalSortie">TOTAL SORTIES=<div id="CalculSortie"></div></div>
<!--*******************************************les boutons pourla validation********************************************-->
            </div>
        <div class="row" id="ligneBouton">
            <div  class="col-sm-3" id="click1"><button>click total course</button></div>
            <div class="col-sm-3" id="click2"><button>click total essence</button></div>
            <div  class="col-sm-3"  id="click3"><button>click total transport</button></div>
            <div class="col-sm-3"  id="click4"><button>click total sorties</button></div>
        </div>
    </div>
</div>
     <script src="script.js"></script>
    </div>
</div>
 </footer>