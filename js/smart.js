
  //Text animation ==== //
  var text_w = 0;
var  slide_num = 0;
  function text(){
  if(text_w<100 && slide_num <5){
    text_w = text_w + 10;
    var wids1 = "width:" + text_w + "%";
    for(let i = 0; i < 5; i++){  

      if (i == slide_num){
        continue;
      }
      document.getElementsByClassName("text_an")[i].style.display="none";

    }
    document.getElementsByClassName("text_an")[slide_num].style.display="block";
    document.getElementById("back").setAttribute('style',wids1);
    document.getElementById("forward").style.display="none";

    //document.getElementById("text2").style.display="none";
    setTimeout(text,50);
  }
  else if(slide_num>=5){
    slide_num =0;    
    setTimeout(text1,50);
   // alert("I'm called");
  }
  else{
    setTimeout(text1,50);
   // alert("I'm called1");
  }
    
    
  }

  var text_w1 = 99;
  function text1(){
    if(text_w1>0 && slide_num <5){

      text_w1 = text_w1 - 10;
      var wids2 = "width:" + text_w1 + "%";
      document.getElementById("forward").style.display="block";
      document.getElementById("back").setAttribute('style',wids2);
      setTimeout(text1,50);
      if(slide_num >=5){
        slide_num =0;
        alert("I'm inside");
      }

    }
    else{
      document.getElementById("forward").style.display="none";
      document.getElementById("back").style.display="none";
      
  text_w =0;
  text_w1 = 99;
  if(slide_num<4){
   
    slide_num = slide_num +1;
        
    for(let j =0; j<5 ; j++){
      if(j == slide_num){
        continue;

      }
      document.getElementsByClassName("text_an")[j].style.display="none";
    }
    document.getElementsByClassName("text_an")[slide_num].style.display="block";
    
setTimeout(text,5000);
  }
  else{
    slide_num = 0;
        
    for(let j =0; j<5 ; j++){
      if(j == slide_num){
        continue;

      }
      document.getElementsByClassName("text_an")[j].style.display="none";
    }
    document.getElementsByClassName("text_an")[slide_num].style.display="block";
    
setTimeout(text,5000);
  }
    }
      
      
    }
    //end============

//Closing Manu
$(document).ready(function(){
    $(".closing").click(function(){
      $(".menu_content").hide();
    });
  });
  //Showing manu
  $(document).ready(function(){
    $(".bars").click(function(){
      $(".menu_content").show();
    });
  });

  //closing pop up

$(document).ready(function(){
    $(".response_cancel").click(function(){
      $(".response").hide();
    });
  });

//====Loader Function======//

function Loading(){
    document.getElementById("slide1").classList.add("animate_slide1");

    document.getElementById("slide2").classList.add("animate_slide2") ;
    setTimeout(fade,3000);
    setInterval(Count,50);
    setTimeout(text,5000);
    }

function fade(){
    document.getElementById("rotation").style.display="none";
    document.getElementById("Loading").style.display="none";
   
}
//=====End of Loader Function====//

//Change header backgroung color when scrolling

function swipe(){
   
  //document.getElementById("header").style.backgroundColor="black";

}


//=====Count the Invested Amount=====//
var count1 = 100;
var count2 = 0.01;
var count3 = 100000;

function Count(){
  
      if(count1<56144.93){
        document.getElementById("BTC1").innerHTML = count1 + count2+  " BTC";
        count1 = count1 + 170;
        count2 = count2 + 0.01;
        let fill2 = (count1/count3)*100;
        let wids = "width:" + fill2 + "%;";
        document.getElementById("fill1").setAttribute('style',wids);
        Math.round(fill2);
        document.getElementById("fill1").innerHTML = fill2  + "%";
      }
      else{
        clearInterval(setInterval(Count,50));
      }
    
      
}

//Animate elements when in viewport

$(window).scroll(function() {
  var top_of_element = $(".card").offset().top;
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();

  if ((bottom_of_screen > top_of_element) ){
      // the element is visible, do something || (top_of_screen < bottom_of_element)
     $(".card").addClass("fadeup");
     $("#header").css("background-color", "black");
     document.getElementById("header").style.backgroundColor="black";

   
  } 
  else {
    $(".card").removeClass("fadeup");
    $("#header").css("background-color", "transparent");
   
  }
});

$(window).scroll(function() {
  var top_of_element = $("iframe").offset().top;
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();

  if ((bottom_of_screen > top_of_element) ){
     $("iframe").addClass("fadeup");
  } 
  else {
    $("iframe").removeClass("fadeup");
  }
});


$(window).scroll(function() {
  var top_of_element = $(".img_network").offset().top;
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();

  if ((bottom_of_screen > top_of_element) ){
    $(".img_network").addClass("fadeup");
  } 
  else {
    $(".img_network").removeClass("fadeup");
  }
});

///====Style to change color of drop list

$(document).ready(function(){
  $(".drop_list").click(function(){
    $(".drop_list").attr("id","list1_hover1");
    $(this).attr("id","list1_hover");
   // $(".response").hide();
  });
});
