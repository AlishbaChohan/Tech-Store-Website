$(document).ready(function(){
    $("#t1").click(function(){
        $(".details1").slideToggle(1000);
        // $('html, body').animate({scrollTop: $("#details1").offset().top});
    });
    $("#t2").click(function(){
        $(".details2").slideToggle(1000);
    });
    $("#t3").click(function(){
        $(".details3").slideToggle(1000);
    });
});

$(document).ready(function loop (){
    $("#ani").fadeIn(2000).fadeOut(2000,loop);
});  //chain

$(document).ready(function (){
    $("#ani").hover(function(){
        $("#ani").text("Our New Products");
    },function(){
        $("#ani").text("New Arrivals");
    });

    $("input").focus(function(){
     
            $(this).css("background-color","#E5FAFF");
      
    });

    $("input").blur(function(){
     
     $(this).css("background-color","white");
 
     });


     $("a").mouseenter(function(){
         $(this).animate({fontSize:"+=5px"},100);


     });

     $("a").mouseleave(function(){
         $(this).css("fontSize","20px");


     });
     
});

// $(document).ready(function(){
// $("#ab").click(function(){
// alert("Phone:+92314485755, E-mail:AItech@gmail.com");
//  });
 
//  $("#abc").click(function(){
//          alert("Our main office is in Islamabad");
//         });


    

//  }); 



//buy page 
let count=0;
function aj(){
   count+=1;
   document.getElementById("cont").innerHTML=count;

}

// var data=0;
// document.getElementById("cont").innerText=data;

// function aj(){
//     data=data + 1 ;
//     document.getElementById("cont").innerText=data;
// }


$(document).ready(function(){
    $("#pay").click(function(){
        $("#checkout").slideDown(1000);

    });

    $("#pay2").click(function(){
        $(".confirm").show(1000);
        $(".buy").hide();
        $("#checkout").hide();


    });


    $("#pay2").click(function(){
        $("#full").append(" " + $("#fname").val());
      });

      $("#pay2").click(function(){
        $("#adree").append(" " + $("#adrename").val());
      });
   
      $("#pay2").click(function(){
        $("#contact").append(" " +  $("#contname").val());
      });

      $("#pay2").click(function(){
        $("#met").append(" "+$("input[name='payname']:checked").val());
      });




});


// contact page
function respo(){

let r1=document.getElementById("r1");
let r2=document.getElementById("r2");

if (r1.checked== true)
{
    document.getElementById("response").style.display="block";
    document.getElementById("contactform").style.display="none";

}

else if (r2.checked== true){
    document.getElementById("response2").style.display="block";
    document.getElementById("contactform").style.display="none";
}

else {
    // document.getElementById("response").style.display="block";
    alert("Please select a concern");
  
}



};









