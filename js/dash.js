
function swipe(){
    var avr = document.getElementById("selectplans-period").value;
    var value1 = document.getElementsByClassName("invest-cards");
    var Amount = document.getElementById("invest1").value;

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

else if(avr == "Diamond"){
    value1[3].style.display = "block";
  }
else{
  value1[0].style.display = "block";
}

}

function search(){
    let avr =  document.getElementById("search_d").value
    if(avr==""){
   alert("Search box is empty");
    }
    else{
        alert("No match link found for " + avr);
    }

}

function invest_valid(num){
let avr = document.getElementById("selectplans-period").value;
let period = document.getElementById("selectplans-period1").value;
let Amount = document.getElementById("invest1").value;
let min =0;

if(avr == "Bronze"){
    min = 30;
   }
else if(avr == "Titanium"){
    min = 50;
   }
else if(avr == "Gold"){
    min = 100;
  }
  
else if(avr == "Diamond"){
      min = 200;
    }
else{
    alert("Please select valid plan");
    return false;
  }
  if(period=="invalid"){
    alert("Please select valid period");
    return false;
  }

if(num<Amount){
    alert("Insufficient balance");
    return false;
}
else if(min>Amount){
    alert("Your Amount is less than Min");
    return false;
}
else{
    return true;
}

    
   
  }
    