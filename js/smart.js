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
    setTimeout(text,50);
  }
  else if(slide_num>=5){
    slide_num =0;    
    setTimeout(text1,50);
  }
  else{
    setTimeout(text1,50);
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

//Scroll Event function
function swipe(){ 
  view1(".faq-text");view1(".stats1"); view1(".imgg");view1(".card_animate3"); //invest-text
  view1(".threestep-text"); view1(".invest-text");view3(".img_network"); view1("iframe"); view1(".chose-text");view1(".card_animate1");
  view2(".stat-text");view2(".card_animate2"); view2(".card_animate4");

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
// Functions to Animate elements when in viewport
function view1(target1){
  $(window).scroll(function() {
    var top_of_element = $(target1).offset().top;
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    if ((bottom_of_screen > top_of_element) ){
       $(target1).addClass("fadeup");
       setTimeout(opas(target1),1000);
      
    } 
    else {
      $(target1).removeClass("fadeup");
      $(target1).attr("style","opacity:0");
    }
  });
}
function opas(target1){
  $(target1).attr("style","opacity:1");
}

function view2(target1){
  $(window).scroll(function() {
    var top_of_element = $(target1).offset().top;
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    if ((bottom_of_screen > top_of_element) ){
       $(target1).addClass("faderight"); 
       setTimeout(opas(target1),1000);
    } 
    else {
    
      $(target1).removeClass("faderight");
      $(target1).attr("style","opacity:0");
     
    }
  });
}

function view3(target1){
  $(window).scroll(function() {
    var top_of_element = $(target1).offset().top;
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    if ((bottom_of_screen > top_of_element) ){
       $(target1).addClass("fadeout"); 
       setTimeout(opas(target1),1000);
    } 
    else {
      $(target1).removeClass("fadeout");
      $(target1).attr("style","opacity:0");
    }
  });
}
//=====End=======//

//For changing background of Header Bar
$(window).scroll(function() {
  var top_of_element = $(".img_network").offset().top;
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  if ((bottom_of_screen > top_of_element) ){
    document.getElementById("header").style.backgroundColor="black";
  } 
  else {
    $("#header").css("background-color", "transparent");
  }
});
//=====End====//

///====Style to change color of drop list
$(document).ready(function(){
  $(".drop_list").click(function(){
    $(".drop_list").attr("id","list1_hover1");
    $(this).attr("id","list1_hover");
   // $(".response").hide();
  });
});
//====End=====//
