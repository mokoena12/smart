function swipe(){
    //alert("I'm Working");

let avr = document.getElementById("selectplans-period").value;
let value1 = document.getElementsByClassName("invest-cards");

 for (let i=0; i<4; i++){
  value1[i].style.display = "none";
}
 if(avr == "Bronze"){
  value1[0].style.display = "block";
 }
 else if(avr == "Titanium"){
  value1[1].style.display = "block";
 }
 else if(avr == "Gold"){
  value1[2].style.display = "block";
}
else{
  value1[3].style.display = "block";
}
}