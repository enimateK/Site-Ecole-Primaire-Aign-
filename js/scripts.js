/* #################################################
                SCRIPTS
################################################# */

function questionenvoye() {
  alert("Votre question a bien &eacutet&eacute envoy&eacute, elle sera visible sur le site une fois que l'administrateur l'aura accept&eacute.");
}

function visuForm(a)
{
    if(a==1){
      document.getElementById("formImage").style.display="block";
      document.getElementById("formSansImage").style.display="none";  
    }else{
      document.getElementById("formSansImage").style.display="block";
      document.getElementById("formImage").style.display="none";
    }
}