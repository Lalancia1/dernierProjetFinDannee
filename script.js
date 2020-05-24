var idInputSalaire=document.getElementById('InputSalaire');

var idInputAllocation=document.getElementById('InputAllocation');
var idcomplement1=document.getElementById('InputComplement1');
var idcomplement2=document.getElementById('InputComplement2');
var idcomplement3=document.getElementById('InputComplement3');
var idcomplement4=document.getElementById('InputComplement4');
var idcomplement5=document.getElementById('InputComplement5');
var idcomplement6=document.getElementById('InputComplement6');
var idcomplement7=document.getElementById('InputComplement7');
var idcomplement8=document.getElementById('InputComplement8');
//**************************************************************************la div pour solder l addition des revenus*******************************************
var idTotalRevenus=document.getElementById('touchRecettes');
//*******************************************************************************au clic de idTotalRevenus,****le resultat devra s'afficher dans la div affiche1***
//*********************************************************variable pour afficher dans la div epargne****************************************
var idAffiche1=document.getElementById('affiche1');
var idAffiche2=document.getElementById('affiche2');
var idAffiche3=document.getElementById('affiche3');
var idAffiche4=document.getElementById('affiche4');

//******************************** ***** au click sur total revenu*********************************************************************

idTotalRevenus.addEventListener('click',function(){
    console.log("one");
    if(idInputSalaire.value){

        var A=idInputSalaire.value;
    }if(idInputAllocation.value){
        var B=idInputAllocation.value;
    }if(idcomplement1.value){
        var C=idcomplement1.value;
    }if(idcomplement2.value){
        var D=idcomplement2.value;
    }if(idcomplement3.value){
        var E=idcomplement3.value;
    }if(idcomplement4.value){
        var F=idcomplement4.value;
    }if(idcomplement5.value){
        var G=idcomplement5.value;
    }if(idcomplement6.value){
        var H=idcomplement6.value;
    }if(idcomplement7.value){
        var I=idcomplement7.value;
    }if(idcomplement8.value){
        var J=idcomplement8.value;
        var totalRecettes=document.getElementById('totalRevenus');
        var result= parseInt(A)+parseInt(B)+parseInt(C)+parseInt(D)+parseInt(E)+parseInt(F)+parseInt(G)+parseInt(H)+parseInt(I)+parseInt(J);
        totalRecettes.innerHTML=result;
        return parseInt(A)+parseInt(B)+parseInt(C)+parseInt(D)+parseInt(E)+parseInt(F)+parseInt(G)+parseInt(H)+parseInt(I)+parseInt(J);
    }
});
//*********************************************var total*****************************************************
var idCalculEsssence=document.getElementById('CalculEsssence ');
var idCalculCourse=document.getElementById('CalculCourse');
var idCalculTransport=document.getElementById('CalculTransport');
var idCalculSortie=document.getElementById('CalculSortie');
//***************************************************block course*******************************************************
//*****************************************************var validation**************************************************
var click1=document.getElementById('click1');


//******************************************************total mois courses********************************************
var course1=document.getElementById('inputSemaine1');
var course2=document.getElementById('inputSemaine2');
var course3=document.getElementById('inputSemaine3');
var course4=document.getElementById('inputSemaine4');


click1.addEventListener('click',function () {

    if(course1.value){
        var  ananas1=course1.value;
    }if(course2.value){
        var ananas2=course2.value
    }if(course3.value){
        var ananas3 =course3.value;
    }if(course4.value){
        var ananas4=course4.value;
    }
    var array1=[ananas1,ananas2,ananas3,ananas4];

    var reducer =(accumulator , currentValue) => parseInt(accumulator) +parseInt(currentValue);
    //  console.log(array1.reduce(reducer));
    var acc=array1.reduce(reducer);
    idCalculCourse.innerHTML=acc;
});
//****************************************bloc essence*************************************************************************
//************************************************click2****************
var idClick2=document.getElementById('click2');
//**************************************************************la div pour l'affichage**************
var idAFtotalEssence=document.getElementById('CalculEsssence');
//***************************************************les input essence*********************************************
var idInputEssence1=document.getElementById('inputSemaineA');
var idInputEssence2=document.getElementById('inputSemaineB');
var idInputEssence3=document.getElementById('inputSemaineC');
var idInputEssence4=document.getElementById('inputSemaineD');
//*****************************************CONDITIONS*********************************
idClick2.addEventListener('click',function(){
    if(idInputEssence1.value){
        var rock1 =idInputEssence1.value;
    }
    if(idInputEssence2.value){
        var  rock2=idInputEssence2.value;
    }
    if(idInputEssence3.value){
        var rock3=idInputEssence3.value;
    }
    if(idInputEssence4.value){
        var  rock4=idInputEssence4.value;
        var array2=[ rock1 , rock2,  rock3, rock4];
        var reducer=(accumulator , currentValue)=>parseInt(accumulator)+parseInt(currentValue);
        var acc2=array2.reduce(reducer);
        idAFtotalEssence.innerHTML=acc2;
    }
});
//*****************************************transport******************************************
//*************************click3***************************

var idClick3 = document.getElementById('click3');
//************************************div d'affichage du total*****************************
var idAfTransport = document.getElementById('CalculTransport');
//*************************************var des semaines***************************************
var rose1 = document.getElementById('inputSemaineE');
var rose2 = document.getElementById('inputSemaineF');
var rose3 = document.getElementById('inputSemaineG');
var rose4 = document.getElementById('inputSemaineH');
//**************************************************************CONDITION*************************

idClick3.addEventListener('click', function () {
    if (rose1.value) {
        var fab1 = rose1.value;
    }
    if (rose2.value) {
        var fab2 = rose2.value;
    }
    if (rose3.value) {
        var fab3 = rose3.value;
    }
    if (rose4.value) {
        var fab4 = rose4.value;
        var array3 = [fab1, fab2, fab3, fab4];
        var reducer = (accumulator, currentValue) => parseInt(accumulator) + parseInt(currentValue);
        var acc3 = array3.reduce(reducer);
        idAfTransport.innerHTML = acc3;
    }
});

//********************************** GENERALE DEPENSES*****************************************************************
//****************************************************************LE CLICK*******************************************
var ClickDep=document.getElementById('touchDepenses');
//*************************************************laDiv pour afficher***********************************************
var idafDepense2=document.getElementById('totalDepenses');

//*******************************************************variable des input il y en a 9*******************************
var idDep1=document.getElementById('InputLoyer');
var idDep2=document.getElementById('InputEauElect');
var idDep3=document.getElementById('InputGazCourant');
var idDep4=document.getElementById('InputAssurance');
var idDep5=document.getElementById('InputMutuelle');
var idDep6=document.getElementById('InputIMPOT');
var idDep7=document.getElementById('InputTelephInternet');
var idDep8=document.getElementById('InputTaxe');
var idDep9=document.getElementById('InputCredit');
var idDep10=document.getElementById('InputCourse');
var idDep11=document.getElementById('InputEssence');
var idDep12=document.getElementById('InputTransport');
var idDep13=document.getElementById('InputSportive');
var idDep14=document.getElementById('InputVacances');

//*********************************************************************condition************************

ClickDep.addEventListener("click", function(){
    if( idDep1.value){
        var accord1=idDep1.value;
    }
    if( idDep2.value){
        var accord2=idDep2.value;
    }
    if( idDep3.value){
        var accord3=idDep3.value;
    }
    if( idDep4.value){
        var accord4=idDep4.value;
    }
    if( idDep5.value){
        var accord5=idDep5.value;

    }
    if( idDep6.value){
        var accord6=idDep6.value;
    }if( idDep7.value){
        var accord7=idDep7.value;
    }

    if(idDep8.value){
        var accord8=idDep8.value;

    }if (idDep9.value){
        var accord9=idDep9.value;
    }if(idDep10.value){
        var accord10=idDep10.value;
    }if(idDep11.value){
        var accord11=idDep11.value;
    }if(idDep12.value){
        var accord12=idDep12.value;
    }if(idDep13.value){
        var accord13=idDep13.value;
    }
    if(idDep14.value){
        var accord14=idDep14.value;
        var arrayBis3=[accord1,accord2,accord3,accord4,accord5,accord6,accord7,accord8,accord9,accord10,accord11,accord12,accord13,accord14];
        var reducer=(accumulator,currentValue)=>parseInt(accumulator)+parseInt(currentValue);
        var accBis3=arrayBis3.reduce(reducer);
        idafDepense2.innerHTML=accBis3;

    }
});
//*************************************bloc esorties********************************************************************
//*********************************var click***************************************************
var  idClick4=document.getElementById('click4');
//**************************************************var div pour afficher le total**************
var idTotalSorties=document.getElementById('CalculSortie');

//*****************************************les input pourles sorties*********************
var idsortie1=document.getElementById('inputSemaineI');
var idsortie2=document.getElementById('inputSemaineII');
var idsortie3=document.getElementById('inputSemaineIII');
var idsortie4=document.getElementById('inputSemaineIV');
//************************************************************************condition*****************************
//****************************************************************************************************************

idClick4.addEventListener('click',function(){
    if( idsortie1.value){
        var vingt=idsortie1.value;
    } if( idsortie2.value){
        var vingtUn=idsortie2.value;
    }if( idsortie3.value){
        var vingtDeux=idsortie3.value;
    }if( idsortie4.value){
        var vingtTrois=idsortie4.value;
        const array4=[ vingt, vingtUn,vingtDeux,vingtTrois];
        var reducer=(accumulateur ,currentValue)=>parseInt(accumulateur)+ parseInt(currentValue);
        var acc4=array4.reduce(reducer);
        idTotalSorties.innerHTML=acc4;
    }
});
var TotEpargne=document.getElementById('totalEpargne');
//********************************************************VARIABLE DE LA EPARGNE*******************************************
var divEpargne=document.getElementById('totalEpargne');
var divAffich1=document.getElementById('affiche1');
var divAffich2=document.getElementById('affiche2');
var divAffich3=document.getElementById('affiche3');
var divAffich4=document.getElementById('affiche4');
var lidClick=document.getElementById('touchEpargne');
//*************************************************pour AVERTISSEMENT APPROCHE REVENUS********************************************
var  TotREV=document.getElementById('totalRevenus');
//console.log(TotREV.innerText);
var S1= parseInt(TotREV.innerText);

var SS1=S1-100;
var SSS1=SS1-100;

//**************************************POUR AVERTISSEMENT DEPASSEMENT REVENUS************************************
var  TotDEP=document.getElementById('totalDepenses');
var D1= parseInt(TotDEP.innerText);

var DD1=D1-100;

var DDD1=DD1-100;

//*******************************************************************condition********************************
lidClick.addEventListener('click',function(){

    S1= parseInt(TotREV.innerText);
    D1= parseInt(TotDEP.innerText);
    console.log(D1);
    console.log(S1);
    var result = S1 - D1;
    TotEpargne.innerHTML= result;
    var a= 10, b = 10;
    if (S1 && D1 ){


        if(D1 >= S1){

            divAffich1.innerHTML="VOS DEPENSES ONT ABSORBE TOUT VOTRE SALAIRE !! ATTENTION!!";

        } else if(D1 ===(S1-100)){

            divAffich1.innerHTML=" VOUS AVEZ DEPASSE LA LIMITE DE VOS REVENUS !";
        }else if(D1 === (S1-200)){
            divAffich2.innerHTML="VOUS COMMENCEZ LARGEMENT A VOUS ELOIGNER DE LA LIMITE DE VOS REVENUS ! ";
            console.log(D1 ===(S1-200));
        }else if(S1 > (D1 - 100)){

            divAffich3.innerHTML= "VOS DEPENSES SONT INFERIEURES A VOTRE SALAIRE BRAVO!!PENSEZ A EPARGNER";
        } else if(S1 === (D1 - 200)){

            divAffich4.innerHTML="VOUS DEPENSES SONT TRES INFERIEURES A VOTRE SALAIRE!! PENSEZ A EPARGNER!!";
        }

    }





});
//**********************************************resultat********************************************************
var clickResult=document.getElementById('touchResultat');
var result1Affich=document.getElementById('affichResult1');
var result2Affich=document.getElementById('affichResult2');
var result3Affich=document.getElementById('affichResult3');
clickResult.addEventListener('click',function(){
    if(TotDEP.innerText && TotREV.innerText){
        var X=TotDEP.innerText; var Y=TotREV.innerText;
        var Z=parseInt(Y)-parseInt(X);
        alert(Z);
    }if(Z===0){
        result1Affich.innerHTML="VOTRE BUDGET MENSUEL EST EN EQUILIBRE!";
    }if(Z<0){
        result2Affich.innerHTML="VOTRE BUDGET MENSUEL EST NEGATIF";
    }if(Z>0){
        result3Affich.innerHTML="VOTRE BUDGET EST POSITIF";
    }
});
/*******************************************SLIDE******************************************************************
 * ******************************************SLIDE****************************************************************
***********************************************SLIDE*************************************************************/
function clickMe() {

    setTimeout(fadeOutEffect, 1000);
    setTimeout(fadeOutEffect2, 7000);
    setTimeout(fadeOutEffect3, 14000);
    setTimeout(fadeOutEffect4, 21000);
    setTimeout(fadeOutEffect5, 27000);
}

function fadeOutEffect() {
    var idOne = document.getElementById("one");
    var fadeEffect = setInterval(function() {
        if (!idOne.style.opacity) {
            idOne.style.opacity = 1;
            idOne.style.animation = "monAnimation 2s ease-in";
        }
        if (idOne.style.opacity > 0) {
            idOne.style.opacity -= 0.1;
            idOne.style.animation = "monAnimation 2s ease-out";
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}

function fadeOutEffect2() {
    var idTwo = document.getElementById("two");
    var fadeEffect = setInterval(function () {
        if (!idTwo.style.opacity) {
            idTwo.style.opacity = 1;
            idTwo.style.animation = "monAnimation 2s ease-in";
        }
        if (idTwo.style.opacity > 0) {
            idTwo.style.opacity -= 0.1;
            idTwo.style.animation = "monAnimation 2s ease-out";
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}
function fadeOutEffect3() {
    var idTree = document.getElementById("tree");
    var fadeEffect = setInterval(function () {
        if (!idTree.style.opacity) {
            idTree.style.opacity = 1;
            idTree.style.animation = "monAnimation 2s ease-in";
        }
        if (idTree.style.opacity > 0) {
            idTree.style.opacity -= 0.1;
            idTree.style.animation = "monAnimation 2s ease-out";
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}
function fadeOutEffect4() {
    var idFour = document.getElementById("four");
    var fadeEffect = setInterval(function () {
        if (!idFour.style.opacity) {
            idFour.style.opacity = 1;
            idFour.style.animation = "monAnimation 2s ease-in";
        }
        if (idFour.style.opacity > 0) {
            idFour.style.opacity -= 0.1;
            idFour.style.animation = "monAnimation 2s ease-out";
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}
function fadeOutEffect5() {
    var idFive = document.getElementById("five");
    var fadeEffect = setInterval(function () {
        if (!idFive.style.opacity) {
            idFive.style.opacity = 1;
            idFive.style.animation = "monAnimation 2s ease-in";
        }
        if (idFive.style.opacity > 0) {
            idFive.style.opacity -= 0.1;
            idFive.style.animation = "monAnimation 2s ease-out";
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}