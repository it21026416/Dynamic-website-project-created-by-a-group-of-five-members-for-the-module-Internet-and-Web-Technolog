function loaddata(Information){
    if(Information == 'btn1'){
        document.getElementById("Showme1").style.display = "block";
        document.getElementById("Showme2").style.display= "none";
        document.getElementById("Showme3").style.display= "none";
    }
    else if(Information == 'btn2'){
        document.getElementById("Showme1").style.display= "none";
        document.getElementById("Showme3").style.display= "none";
        document.getElementById("Showme2").style.display= "block";
    }
    else if(Information == 'btn3'){
        document.getElementById("Showme1").style.display= "none";
        document.getElementById("Showme2").style.display= "none";
        document.getElementById("Showme3").style.display= "block";
    }
}